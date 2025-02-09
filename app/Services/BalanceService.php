<?php

namespace App\Services;

use App\Models\Balance;

class BalanceService{
    public function updateBalance($data){
        $balance = Balance::first(); 
        if (!$balance) {
            return false;
        }
        $balance->update([
            'water_price' => $data['water_price'],
            'dishes_price' => $data['dishes_price'],
        ]);
        return $balance;
    }
}
