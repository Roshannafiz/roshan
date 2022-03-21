<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'section_id',
        'product_name',
        'product_code',
        'product_quantity',
        'product_color',
        'product_regular_price',
        'product_seal_price',
        'product_discount',
        'product_size',
        'product_video',
        'main_image',
        'gallery_image',
        'short_description',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_featured',
        'status',
    ];

    //Relation Product To Category Table
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    //Relation Product To Sub Category Table
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory', 'subcategory_id');
    }

    //Relation Product To Section Table
    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    //Relation Product To Brnd Table
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id');
    }

    //Relation Product To Attribute Table
    public function attributes()
    {
        return $this->hasMany('App\Models\ProductsAttribute');
    }

    //Relation Product To Products Image Table
    public function gallery_images()
    {
        return $this->hasMany('App\Models\ProductsImage');
    }





    // Get Product / Category Discopunt Price
    public static function getDiscountedPrice($product_id)
    {
        $proDetails = Product::select('product_seal_price', 'product_discount', 'category_id')->where('id', $product_id)->first()->toArray();
        $catDetails = Category::select('category_discount')->where('id', $proDetails['category_id'])->first()->toArray();
        if ($proDetails['product_discount'] > 0) {
            // If Product Discount Added In Admnin Panel
            $discounted_price = $proDetails['product_seal_price'] - ($proDetails['product_seal_price'] * $proDetails['product_discount'] / 100);
            //  Seal Price = Cost Price - Discount Price
            //  400        = 500 - (500*10/100 = 50)
        } elseif ($catDetails['category_discount'] > 0) {
            // If Product Discout Is Not Added And Cataegory Discount In Added In Admin Panel
            $discounted_price = $proDetails['product_seal_price'] - ($proDetails['product_seal_price'] * $catDetails['category_discount'] / 100);
        } else {
            $discounted_price = 0;
        }
        return $discounted_price;
    }






    public static function getDiscountedAttrPrice($product_id, $size)
    {
        $proAttrPrice = ProductsAttribute::where(['product_id' => $product_id, 'size' => $size])->first()->toArray();
        $proDetails = Product::select('product_discount', 'category_id')->where('id', $product_id)->first()->toArray();
        $catDetails = Category::select('category_discount')->where('id', $proDetails['category_id'])->first()->toArray();

        if ($proDetails['product_discount'] > 0) {
            // If Product Discount Added In Admnin Panel
            $final_price = $proAttrPrice['price'] - ($proAttrPrice['price'] * $proDetails['product_discount'] / 100);
            $discount = $proAttrPrice['price'] - $final_price;
            //  Seal Price = Cost Price - Discount Price
            //  400        = 500 - (500*10/100 = 50)
        } elseif ($catDetails['category_discount'] > 0) {
            // If Product Discout Is Not Added And Cataegory Discount In Added In Admin Panel
            $final_price = $proAttrPrice['price'] - ($proAttrPrice['price'] * $catDetails['category_discount'] / 100);
            $discount = $proAttrPrice['price'] - $final_price;
        } else {
            $final_price = $proAttrPrice['price'];
            $discount = 0;
        }
        return array(
            'product_price' => $proAttrPrice['price'],
            'final_price' => $final_price,
            'discount' => $discount,
        );
    }

    // Get Product Image
    public static function getProductImage($product_id)
    {
        $getProductImage = Product::select('main_image')->where('id', $product_id)->first()->toArray();
        return $getProductImage['main_image'];
    }
}
