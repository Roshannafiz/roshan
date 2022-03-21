<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductsAttribute;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // Get All Active Products
        $allProducts = Product::where('status', 1)->limit('15')->get();
        // Get All Active Categories
        $allCategories = Category::where('status', 1)->limit('6')->get();

        return view('frontend.shop', compact('allProducts', 'allCategories'));
    }
}
