<?php
namespace App\Services;
use App\Models\StorageOutput;

class StorageOutputService{
    public function getAll(){
        return StorageOutput::get();
    }

}
