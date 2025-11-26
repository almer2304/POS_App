<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['invoice_number', 'supplier_id', 'total_price'];
    
    public function supplier(){
        $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
