<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class invoice extends Model
{
  use HasFactory;
  protected $fillable = ['number','customer_id','date','paymode_id'];

  public function customer(){
    return $this->belongsTo(customer::class);
  }
  public function paymode(){
    return $this->belongsTo(paymode::class);
  }
}
