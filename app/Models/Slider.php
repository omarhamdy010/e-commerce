<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','link','image','status'
    ];
    protected $appends =['image_path'];
    public function getImagePathAttribute(){
        return asset('uploads/slider/'.$this->image);
    }
}
