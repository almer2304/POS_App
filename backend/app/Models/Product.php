<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['sku', 'name', 'category_id', 'price_buy', 'price_sell', 'stock', 'unit', 'description'];

    public function category(){
        $this->belongsTo(Category::class, 'category_id');
    }
}
