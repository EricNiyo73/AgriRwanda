<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmers extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname', 'telephone', 'district', 'category', 'product_name',
        'image', 'product_description', 'quantity', 'quantity_unit'
    ];
}
