<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['image_path'];

    public $translatedAttributes = ['name'];

    public function getImagePathAttribute()
    {
        return asset('uploads/category/' . $this->image);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }
}
