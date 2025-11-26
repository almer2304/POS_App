<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    protected $fillable = ['purchase_id', 'product_id', 'qty', 'price_buy', 'subtotal'];

    public function purchase(){
        $this->belongsTo(Purchase::class, 'purchase_id');
    }

    public function product(){
        $this->belongsToMany(Product::class, 'product_id');
    }
}
