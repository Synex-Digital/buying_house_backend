<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    function parent_category(){
        return $this->belongsTo(Category::class, 'parent_category_id');
    }
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    function thumbnail(){
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
