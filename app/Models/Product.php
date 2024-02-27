<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'image',
        'description',
        'star',
        'Evaluate',
        'sold',
        'discount',
        'price',
        'Classify',
        'size',
        'views',
    ];

    public $table = 'products';
}
