<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balans extends Model
{
    /** @use HasFactory<\Database\Factories\BalansFactory> */
    use HasFactory;
    protected $fillable = [
        'water_price',
        'dishes_price',
        'cash_paymart',
        'transfar_paymart',
        'card_paymart',
    ];
}