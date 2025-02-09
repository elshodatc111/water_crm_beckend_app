<?php

namespace App\Services;
use App\Models\Storage;
class StorageService{
    
    public function getStorage(){
        return Storage::get();
    }
}