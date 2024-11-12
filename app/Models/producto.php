<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model

{
    use HasFactory;
    protected $table ='products';
    protected $fillable =['name','price','stok','category_id'];

    public function category(){

        return $this->belongsTo(category::class);
    }
}
