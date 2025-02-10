<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageOutput extends Model{
    use HasFactory;
    protected $fillable = [
        'storage_id', 
        'guard_id', 
        'currer_id',
        'status', 
        'dishes_count', 
        'comment'
    ];
    // Ombor bilan bog‘lanish
    public function storage(){
        return $this->belongsTo(Storage::class);
    }
    // Guard user bilan bog‘lanish
    public function guard(){
        return $this->belongsTo(User::class, 'guard_id');
    }
    // Courier user bilan bog‘lanish
    public function courier(){
        return $this->belongsTo(User::class, 'currer_id');
    }
}
