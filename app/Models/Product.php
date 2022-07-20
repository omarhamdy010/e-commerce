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
    protected $appends = ['image_path','default_image'];
    public $translatedAttributes = ['title', 'description'];

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

    public function getDefaultImageAttribute()
    {
        return $this->images()->where('is_default',1)->first();
    }

    public function getImagePathAttribute()
    {
        return $this->images()->where('is_default',0)->get();
    }
}
