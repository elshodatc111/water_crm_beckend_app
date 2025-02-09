<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageOutput extends Model
{
    /** @use HasFactory<\Database\Factories\StorageOutputFactory> */
    use HasFactory;
    protected $fillable = [
        'storage_id',
        'user_id',
        'currer_id',
        'status',
        'dishes_count',
        'comment',
    ];
}