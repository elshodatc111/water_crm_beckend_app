<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->integer('water_price')->default(10000);
            $table->integer('dishes_price')->default(10000);
            $table->integer('cash_paymart')->default(0);
            $table->integer('transfar_paymart')->default(0);
            $table->integer('card_paymart')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
