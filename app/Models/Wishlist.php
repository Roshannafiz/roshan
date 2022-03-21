<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public static function countWishlist($product_id)
    {
        $countWishlist = Wishlist::where(['user_id' => Auth::user()->id, 'product_id' => $product_id])->count();
        return $countWishlist;
    }



    public static function userWishlistItems()
    {
        $userWishlistItems = Wishlist::with('products')->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get()->toArray();
        return $userWishlistItems;
    }


    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
