<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'status',
    ];

    // Relation Subcategory To Category Table
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
