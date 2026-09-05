<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
     use HasFactory;

     protected $table = 'category_product';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 
        'kategori_id'
        );
    }
}
