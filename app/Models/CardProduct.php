<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image', 'price'
    ];

    protected $table = 'cards_product';
}
