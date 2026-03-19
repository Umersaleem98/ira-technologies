<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'name',
        'image',     // Make image fillable
        'is_active',
    ];
    
   public function products()
    {
        return $this->hasMany(Product::class);
    }
}
