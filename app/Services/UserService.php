<?php

namespace App\Services;

use App\Models\User;
use App\Models\Balance;
use Illuminate\Support\Facades\Hash;

class UserService{
    public function getGuards(){
        return User::where('type', 'guard')->get();
    }

    public function getCouriers(){
        return User::where('type', 'currer')->get();
    }

    public function getBalance(){
        return Balance::first();
    }

    public function createUser(array $data){
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['role']
        ]);
    }

    public function getUserById($id){
        return User::where('id', $id)->firstOrFail();
    }
}
