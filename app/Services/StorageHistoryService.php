<?php
namespace App\Services;
use App\Models\StorageHistory;

class StorageHistoryService{

    public function dishesCount($dishes_count, $storage_id){
        return StorageHistory::create([
            'storage_id' => $storage_id,
            'dishes_input' => $dishes_count,
        ]);
    }

    public function dishesOutput($status, $count, $storage_id){
        if($status=='dishes_count'){
            return StorageHistory::create([
                'storage_id' => $storage_id,
                'dishes_output' => $count,
            ]);
        }else{
            return StorageHistory::create([
                'storage_id' => $storage_id,
                'defective_output' => $count,
            ]);
        }
    }

}