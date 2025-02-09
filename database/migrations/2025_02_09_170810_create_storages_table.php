<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('dishes_count');
            $table->integer('dishes_defective');
            $table->integer('cash_paymart');
            $table->boolean('status');
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('storages');
    }
};
