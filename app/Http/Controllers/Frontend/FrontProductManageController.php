<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductsAttribute;
use Illuminate\Http\Request;

class FrontProductManageController extends Controller
{
    // Display Product Details Information
    public function product_detail($id)
    {
        $productDetails = Product::with(['category', 'brand', 'attributes', 'subcategory' => function ($query) {
            $query->where('status', 1);
        }, 'gallery_images'])->find($id)->toArray();
        $total_stock = ProductsAttribute::where('product_id', $id)->sum('stock');

        // For Related Product
        $category_id = $productDetails['category_id'];
        $related_products = Product::where('category_id', $category_id)->limit(8)->inRandomOrder()->get()->toArray();

        return view('frontend.product-view-page.product-details', compact('productDetails', 'total_stock', 'related_products'));
    }


    // Get Product Attribute Price By Ajax / Change Size To Update Price
    public function getProductPrice(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $getDiscountedAttrPrice = Product::getDiscountedAttrPrice($data['product_id'], $data['size']);
            return $getDiscountedAttrPrice;
        }
    }
}
