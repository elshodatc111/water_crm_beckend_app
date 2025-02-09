<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model{
    use HasFactory;
    protected $fillable = [
        'name',
        'dishes_count',
        'dishes_defective',
        'cash_paymart',
        'status',
    ];
}