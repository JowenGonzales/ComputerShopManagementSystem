<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $table = 'computer';
    protected $fillable = [
        'name',
        'price_per_hour',
        'total_price',
        'operating_system',
        'processor',
        'ram',
        'graphics_card',
        'storage',
        'location',
        'notes',
    ];
}
