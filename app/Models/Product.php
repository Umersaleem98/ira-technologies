<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\ProductRating;
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

    protected $casts = [
        'images' => 'array',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
