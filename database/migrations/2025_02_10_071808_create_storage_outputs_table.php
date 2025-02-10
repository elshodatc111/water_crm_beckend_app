<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('storage_outputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('storage_id')->constrained('storages')->onDelete('cascade');
            $table->foreignId('guard_id'); 
            $table->foreignId('currer_id'); 
            $table->boolean('status')->default(1);
            $table->integer('dishes_count')->default(0);
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('storage_outputs');
    }
};
