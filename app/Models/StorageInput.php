<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageInput extends Model
{
    /** @use HasFactory<\Database\Factories\StorageInputFactory> */
    use HasFactory;
    protected $fillable = [
        'storage_id',
        'currer_id',
        'dishes_status',
        'dishes_count',
        'paymart_type',
        'paymart',
        'status',
        'user_id',
        'admin_id',
    ];
}