<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with(['user', 'product'])->get()->toArray();
        return view('admin.rating.index', compact('ratings'));
    }


    // Change Rating Usign Ajax 
    public function rating_change_status(Request $request)
    {
        $rating = Rating::find($request->rating_id);
        $rating->status = $request->status;
        $rating->save();
    }
}
