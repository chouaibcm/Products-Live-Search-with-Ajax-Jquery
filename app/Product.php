<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title','price','image',
    ];

    protected $appends = ['image_path'];
    public function getImagePathAttribute()
       {
           return asset('uploads/product_img/' . $this->image);
       }
}
