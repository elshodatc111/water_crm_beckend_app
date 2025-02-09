<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model{
    protected $fillable = [
        'water_price',
        'dishes_price',
        'cash_paymart',
        'transfar_paymart',
        'card_paymart',
    ];
}