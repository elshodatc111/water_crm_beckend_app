<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model{
    protected $fillable = [
        'name',
        'dishes_count',
        'dishes_defective',
        'cash_paymart',
        'status',
    ];
}