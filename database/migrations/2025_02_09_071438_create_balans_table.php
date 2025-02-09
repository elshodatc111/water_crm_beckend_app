<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balans', function (Blueprint $table) {
            $table->id();
            $table->integer('water_price');
            $table->integer('dishes_price');
            $table->integer('cash_paymart');
            $table->integer('transfar_paymart');
            $table->integer('card_paymart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balans');
    }
};
