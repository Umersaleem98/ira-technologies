<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand_id',
        'description',
        'tag',
        'images',
        'rating'
    ];

   
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
