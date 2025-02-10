<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class StorageHistory extends Model{
    use HasFactory;
    protected $fillable = [
        'storage_id', 
        'dishes_input', 
        'dishes_output', 
        'defective_output'
    ];
    public function storage(){
        return $this->belongsTo(Storage::class);
    }
}
