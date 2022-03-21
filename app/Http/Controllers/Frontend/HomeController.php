<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductsAttribute;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get All Product For Best Product
        $bestProducts = Product::where('is_featured', 'No')->limit(8)->inRandomOrder()->get();
        // Get Featured Product
        $featuredProducts = Product::where('is_featured', 'Yes')->limit(10)->inRandomOrder()->get();
        // Get All Slider
        $sliders = Slider::where('status', 1)->get();
        return view('frontend.home', compact('featuredProducts', 'bestProducts', 'sliders'));
    }
}
