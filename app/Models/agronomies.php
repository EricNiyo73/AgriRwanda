<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agronomies extends Model
{
      use HasFactory;
    protected $fillable = [
        'district', 'category', 'plant_name',
        'video', 'additional_info','in_charge'
    ];
}
