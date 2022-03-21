<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductsAttribute;
use App\Models\ProductsImage;
use App\Models\Section;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category' => function ($query) {
            $query->select('id', 'category_name');
        }, 'section' => function ($query) {
            $query->select('id', 'name');
        }])->get();
        return view('admin.product.index', compact('products'));
    }

    // Create Product
    public function create()
    {
        // Get Section With Category
        $categories = Section::with('categories')->get();
        $categories = json_decode(json_encode($categories), true);

        // Get All Subcategory With Category
        $subcategories = Category::with('subcategories')->get();
        $subcategories = json_decode(json_encode($subcategories), true);

        // // Get All Active Brand
        $brands = Brand::where('status', 1)->get();
        $brands = json_decode(json_encode($brands), true);


        return view('admin.product.create', compact('categories', 'brands', 'subcategories'));
    }




    // Update Product To First Get ID
    public function edit($id)
    {
        // Get Section With Category
        $categories = Section::with('categories')->get()->toArray();

        // Get Category With Sub Category
        $subcategories = Category::with('subcategories')->get()->toArray();

        $product = Product::find($id);
        $brands = Brand::all();
        return view('admin.product.edit', compact('product', 'categories', 'subcategories', 'brands'));
    }




    // Store Product In Database
    public function store(Request $request)
    {
        $product = new Product();
        $qty = !empty($request->product_quantity) ? $request->product_quantity : 100;
        if ($request->isMethod('post')) {
            $data = $request->all();
            // Upload Product Image Need To Install (intervention/image Packege)
            if ($request->hasFile('main_image')) {
                $image_tmp = $request->file('main_image');
                if ($image_tmp->isValid()) {
                    // Upload Images After  Resize
                    $image_name = $image_tmp->getClientOriginalName();
                    $extention = $image_tmp->getClientOriginalExtension();
                    $imageName = $image_name . '-' . rand(111, 99999) . '.' . $extention;
                    $large_image_path = 'admin/images/upload-product/large/' . $imageName;
                    $medium_image_path = 'admin/images/upload-product/medium/' . $imageName;
                    $small_image_path = 'admin/images/upload-product/small/' . $imageName;
                    Image::make($image_tmp)->save($large_image_path); // W:1040 H:1200
                    Image::make($image_tmp)->resize(520, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260, 300)->save($small_image_path);
                    // Save Main Image In Products Table
                    $product->main_image = $imageName;
                }
            }

            // Upload Product Video
            if ($request->hasFile('product_video')) {
                $video_tmp = $request->file('product_video');
                if ($video_tmp->isValid()) {
                    // Upload Video
                    $video_name = $video_tmp->getClientOriginalName();
                    $extention = $video_tmp->getClientOriginalExtension();
                    $videoName = $video_name . '-' . rand() . '.' . $extention;
                    $video_path = 'admin/videos/upload-product-video/';
                    $video_tmp->move($video_path, $videoName);
                    // Save Video In Products Table
                    $product->product_video = $videoName;
                }
            }

            $categoryDetails = Category::find($data['category_id']);
            $product->section_id = $categoryDetails['section_id'];
            $product->category_id = $data['category_id'];
            $product->subcategory_id = $data['subcategory_id'];
            $product->brand_id = $data['brand_id'];
            $product->product_name = $data['product_name'];
            $product->product_slug = $data['product_slug'];
            $product->product_regular_price = $data['product_regular_price'];
            $product->product_seal_price = $data['product_seal_price'];
            $product->product_code = $data['product_code'];
            $product->product_quantity = $qty;
            // $product->product_color = $data['product_color'];
            $product->product_discount = $data['product_discount'];
            $product->is_featured = $data['is_featured'];
            $product->meta_title = $data['meta_title'];
            $product->meta_keywords = $data['meta_keywords'];
            $product->meta_description = $data['meta_description'];
            $product->short_description = $data['short_description'];
            $product->description = $data['description'];
            $product->save();
            return redirect('/products')->with('message', "Product Added Successfuly");
        }
    }





    // Update Product In Database
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
        // Update Product Image
        if ($request->hasFile('main_image')) {
            $image_tmp = $request->file('main_image');
            if ($image_tmp->isValid()) {
                // Update Images After  Resize
                $image_name = $image_tmp->getClientOriginalName();
                $extention = $image_tmp->getClientOriginalExtension();
                $imageName = $image_name . '-' . rand(111, 99999) . '.' . $extention;
                $large_image_path = 'admin/images/upload-product/large/' . $imageName;
                $medium_image_path = 'admin/images/upload-product/medium/' . $imageName;
                $small_image_path = 'admin/images/upload-product/small/' . $imageName;
                Image::make($image_tmp)->save($large_image_path); // W:1040 H:1200
                Image::make($image_tmp)->resize(520, 600)->save($medium_image_path);
                Image::make($image_tmp)->resize(260, 300)->save($small_image_path);
                // Save Main Image In Products Table
                $product->main_image = $imageName;
            }
        }

        // Update Product Video
        if ($request->hasFile('product_video')) {
            $video_tmp = $request->file('product_video');
            if ($video_tmp->isValid()) {
                // Update Video
                $video_name = $video_tmp->getClientOriginalName();
                $extention = $video_tmp->getClientOriginalExtension();
                $videoName = $video_name . '-' . rand() . '.' . $extention;
                $video_path = 'admin/videos/upload-product-video/';
                $video_tmp->move($video_path, $videoName);
                // Save Video In Products Table
                $product->product_video = $videoName;
            }
        }

        $categoryDetails = Category::find($data['category_id']);
        $product->section_id = $categoryDetails['section_id'];
        $product->category_id = $data['category_id'];
        $product->subcategory_id = $data['subcategory_id'];
        $product->product_name = $data['product_name'];
        $product->brand_id = $data['brand_id'];
        $product->product_slug = $data['product_slug'];
        $product->product_regular_price = $data['product_regular_price'];
        $product->product_seal_price = $data['product_seal_price'];
        $product->product_code = $data['product_code'];
        $product->product_quantity = $data['product_quantity'];
        $product->product_discount = $data['product_discount'];
        $product->is_featured = $data['is_featured'];
        $product->meta_title = $data['meta_title'];
        $product->meta_keywords = $data['meta_keywords'];
        $product->meta_description = $data['meta_description'];
        $product->short_description = $data['short_description'];
        $product->description = $data['description'];
        $product->update();
        return redirect('/products')->with('message', "Product Updated Successfuly");
    }







    // Change Ststus Usign Ajax 
    public function change_status(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->status = $request->status;
        $product->save();
    }





    // Automatick Add Slug Wheen Type Name Flied
    public function checkSlug(Request $request)
    {
        $name =  $request->name;
        return response(['slug' => $this->slugify($name)]);
    }

    // Automatick Add Slug When Type Name Flied
    public  function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            //return 'n-a';
            return '';
        }

        return $text;
    }





    // Delete Product
    public function destroy($id)
    {
        $delete_data = Product::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('message', "Product Deleted Successfully");
        }
    }



    // Add Product Attribute
    public function AddAttribute(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            foreach ($data['sku'] as $key => $value) {
                if (!empty($value)) {
                    // SKU Already Exists Or Not
                    // $attrCountSKU = ProductsAttribute::where('sku', $value)->count();
                    $attrCountSKU = ProductsAttribute::where(['product_id' => $id, 'sku' => $value])->count();
                    if ($attrCountSKU > 0) {
                        return redirect()->back()->with('error_message', "This SKU Already Exists");
                    }

                    // Size Already Exists Or Not
                    $attrCountSize = ProductsAttribute::where(['product_id' => $id, 'size' => $data['size'][$key]])->count();
                    if ($attrCountSize > 0) {
                        return redirect()->back()->with('error_message', "This Size Already Exists");
                    }

                    // Color Already Exists Or Not
                    $attrCountColor = ProductsAttribute::where(['product_id' => $id, 'color' => $data['color'][$key]])->count();
                    if ($attrCountColor > 0) {
                        return redirect()->back()->with('error_message', "This Color Already Exists");
                    }

                    $attribute = new ProductsAttribute();
                    $attribute->product_id = $id;
                    $attribute->sku = $value;
                    $attribute->size = $data['size'][$key];
                    $attribute->color = $data['color'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();
                }
            }
            return redirect()->back()->with('message', "Attribute Added Successfully 😊");
        }
        $productdata = Product::select('id', 'product_name', 'product_code', 'main_image')->with('attributes')->find($id);
        $productdata = json_decode(json_encode($productdata), true);
        return view('admin.product.add_attribute', compact('productdata'));
    }







    // Edit Product Attribute
    public function editAttribute(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            foreach ($data['attrId'] as $key => $attr) {
                if (!empty($attr)) {
                    ProductsAttribute::where(['id' => $data['attrId'][$key]])->update([
                        'price' => $data['price'][$key],
                        'stock' => $data['stock'][$key],
                    ]);
                }
            }
            return redirect()->back()->with('message', "Attribute Updated Successfully 😊");
        }
    }







    // Change Product Attribute Ststus Usign Ajax 
    public function attribute_change_status(Request $request)
    {
        $attribute = ProductsAttribute::find($request->attribute_id);
        $attribute->status = $request->status;
        $attribute->save();
    }






    // Delete Product Attribute
    public function deleteAttribute($id = null)
    {
        $delete_data = ProductsAttribute::find($id);
        $delete_data->delete();
        return redirect()->back()->with('message', "Attribute Deleted Successfully");
    }




    // Add Product Gallery Images
    public function AddGalleryImages(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $key => $image) {
                    $productImage = new ProductsImage();
                    $image_tmp = Image::make($image);
                    $extention = $image->getClientOriginalExtension();
                    $imageName = rand(111, 99999) . time() . "." . $extention;

                    $large_image_path = 'admin/images/upload-product/large/' . $imageName;
                    $medium_image_path = 'admin/images/upload-product/medium/' . $imageName;
                    $small_image_path = 'admin/images/upload-product/small/' . $imageName;
                    Image::make($image_tmp)->save($large_image_path); // W:1040 H:1200
                    Image::make($image_tmp)->resize(520, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260, 300)->save($small_image_path);
                    // Save Gallery Image In Products-Gallery Table
                    $productImage->image = $imageName;
                    $productImage->product_id = $id;
                    $productImage->save();
                }
                return redirect()->back()->with('message', "Images Added Successfully 🙂");
            }
        }
        $productdata = Product::with('gallery_images')->select('id', 'product_name', 'product_code', 'main_image')->find($id);
        $productdata = json_decode(json_encode($productdata), true);
        return view('admin.product.add_gallery_images', compact('productdata'));
    }






    // Change Product Gallery Image Ststus Usign Ajax 
    public function gallery_image_change_status(Request $request)
    {
        $gallery_image = ProductsImage::find($request->gallery_image_id);
        $gallery_image->status = $request->status;
        $gallery_image->save();
    }



    // Delete Product Gallery Image
    public function gallery_image_delete($id)
    {
        // Get Product Image
        $productImage = ProductsImage::select('image')->where('id', $id)->first();
        // Get Product Image Path
        $small_image_path = 'admin/images/upload-product/small/';
        $meduil_image_path = 'admin/images/upload-product/medium/';
        $large_image_path = 'admin/images/upload-product/large/';
        // Delete Product Gallery Small Image If Exists In Small Folder
        if (file_exists($small_image_path . $productImage->image)) {
            unlink($small_image_path . $productImage->image);
        }
        // Delete Product Gallery Medium Image If Exists In Medium Folder
        if (file_exists($meduil_image_path . $productImage->image)) {
            unlink($meduil_image_path . $productImage->image);
        }
        // Delete Product Gallery Large Image If Exists In Large Folder
        if (file_exists($large_image_path . $productImage->image)) {
            unlink($large_image_path . $productImage->image);
        }
        // Delete Product Image Form Products_Images Table
        ProductsImage::where('id', $id)->delete();
        return redirect()->back()->with('message', "Product Image Has Beed Deleted");
    }
}
