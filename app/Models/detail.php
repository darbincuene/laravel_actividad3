<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class detail extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','invoices_id','quantity','price'];


    public function product(){
        return $this->belongsTo(producto::class,'product_id');
    }
    public function invoice(){
        return $this->belongsTo(invoice::class,'invoices_id');
    }

   
}
