<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\json_decode;

class Section extends Model
{
    use HasFactory;


    // Join Section To Subcategory
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'section_id')->where(['status' => 1])->with('subcategories');
    }


    // Join Section To Category
    public static function sections()
    {
        $getSections = Section::with('categories')->where('status', 1)->limit(5)->get()->toArray();
        return $getSections;
    }

}
