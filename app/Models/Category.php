<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'category_name',
        'category_image',
        'category_discount',
        'description',
        'url',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
    ];

    // Join Category To Subcategory
    public function subcategories()
    {
        return $this->hasMany('App\Models\Subcategory', 'category_id')->where(['status' => 1]);
    }

    // Join Category With Subcategory
    public static function categories()
    {
        $getCategory = Category::with('subcategories')->where('status', 1)->limit(8)->orderBy('id', 'DESC')->get()->toArray();
        return $getCategory;
    }
}
