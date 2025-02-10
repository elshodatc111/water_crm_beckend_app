<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class StorageInput extends Model{
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
        'commit'
    ];
    // Ombor bilan bog‘lanish
    public function storage(){
        return $this->belongsTo(Storage::class);
    }
    // Yetkazib beruvchi bilan bog‘lanish
    public function courier(){
        return $this->belongsTo(User::class, 'currer_id');
    }
    // Buyurtmani yaratgan foydalanuvchi bilan bog‘lanish
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    // Tasdiqlagan admin bilan bog‘lanish
    public function admin(){
        return $this->belongsTo(User::class, 'admin_id');
    }
}
