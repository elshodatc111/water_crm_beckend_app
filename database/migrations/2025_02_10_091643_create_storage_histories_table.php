<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('storage_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('storage_id')->constrained('storages')->onDelete('cascade');
            $table->integer('dishes_input')->default(0);  // Omborga kirgan mahsulotlar
            $table->integer('dishes_output')->default(0); // Ombordan chiqqan mahsulotlar
            $table->integer('defective_output')->default(0); // Noto‘g‘ri mahsulotlar
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('storage_histories');
    }
};
