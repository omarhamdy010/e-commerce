<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = ['image_path'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImagePathAttribute()
    {
        return asset('uploads/admin/' . $this->image);
    }
}
