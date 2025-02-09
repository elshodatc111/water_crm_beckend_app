<?php

namespace App\Services;
use App\Models\Storage;
class StorageService{

    public function getStorage(){
        return Storage::get();
    }

    public function createStorage(array $request){
        return Storage::create([
            'name' => $request['name'],
            'dishes_count' => 0,
            'dishes_defective' => 0,
            'cash_paymart' => 0,
            'status' => true,
        ]);
    }
}