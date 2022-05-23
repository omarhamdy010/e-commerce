<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product');
    }

    public function offer(){
        return $this->hasOne(product_offer::class);
    }

    public function images(){
        return $this->hasMany(product_image::class);
    }
}
