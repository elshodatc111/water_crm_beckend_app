<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Balance;
class BalanceSeeder extends Seeder{
    public function run(): void{
        Balance::create();
    }
}
