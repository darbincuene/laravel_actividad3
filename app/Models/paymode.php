<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class paymode extends Model
{
    use HasFactory;
    protected $table = 'paymode';
    protected $fillable = ['name','observation'];
}
