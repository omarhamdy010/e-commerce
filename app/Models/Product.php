<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    protected $guarded = [];

    public $translatedAttributes = ['title','description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function offer()
    {
        return $this->hasOne(product_offer::class);
    }

    public function images()
    {
        return $this->hasMany(product_image::class);
    }
}
