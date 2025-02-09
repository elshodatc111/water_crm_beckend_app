<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(): void{
        User::factory()->count(10)->create();
        $this->call([
            UserSeeder::class,
        ]);
    }
}
