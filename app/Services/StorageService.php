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

    public function getShow($id){
        return Storage::find($id);
    }

    public function updateStorage($request,$id){
        $Storage = Storage::find($id);
        return $Storage->update([
            'name' => $request->name,
            'status' => filter_var($request->status, FILTER_VALIDATE_BOOLEAN) ? 1 : 0,
        ]);
    }
}