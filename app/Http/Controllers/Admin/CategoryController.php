<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Section;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }






    // Create Category
    public function create(Request $request)
    {
        // Get All Active Section
        $GetallSections = Section::where('status', '1')->get();
        return view('admin.category.create', compact('GetallSections'));
    }




    // Update Category To First Get ID
    public function edit($id)
    {
        $category = Category::find($id);
        $sections = Section::all();
        return view('admin.category.edit', compact('category', 'sections'));
    }




    // Store Category In Database
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $category = new Category();
            $category->section_id = $data['section_id'];
            $category->category_name = $data['category_name'];
            $category->category_discount = $data['category_discount'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->meta_title = $data['meta_title'];
            $category->meta_description = $data['meta_description'];
            $category->meta_keywords = $data['meta_keywords'];
            // Category Image
            if ($request->hasFile('category_image')) {
                $file = $request->file('category_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('admin/images/upload-category', $filename);
                $category->category_image = $filename;
            }
            $category->save();
            return redirect()->back()->with('message', "Category Created Successfully 🙂");
        }
    }




    // Update Category In Database
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('category_image')) {
            $path = 'admin/images/upload-category/' . $category->category_image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('category_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-category', $filename);
            $category->category_image = $filename;
        }
        $category->category_name = $request->category_name;
        $category->section_id = $request->section_id;
        $category->url = $request->url;
        $category->category_discount = $request->category_discount;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        $category->description = $request->description;
        $category->update();
        return redirect('/categories')->with('message', "Category Updated Successfully!");
    }





    // Change Ststus Usign Ajax 
    public function change_status(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->status = $request->status;
        $category->save();
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



    // Delete Category
    public function destroy($id)
    {
        $delete_data = Category::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('message', "Category Deleted Successfully 🤯");
        }
    }
}
