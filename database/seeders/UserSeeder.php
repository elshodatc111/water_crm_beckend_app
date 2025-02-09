<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    public function run(): void{
        User::create([
            'name' => "Elshod Musurmonov",
            'phone' => '+998908830450',
            'type' => 'admin',
            'email' => 'elshodatc1116@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
