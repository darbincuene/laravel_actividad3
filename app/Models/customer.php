<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_number',
        'first_name',
        'last_name',
        'address',
        'Date of birth',
        'phone_number',
        'email'
    ];
    
}
