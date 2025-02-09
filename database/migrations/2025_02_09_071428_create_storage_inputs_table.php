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
        Schema::create('storage_inputs', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('storage_id')->constrained();
            $table->unsignedBigInteger('currer_id')->constrained();
            $table->boolean('dishes_status');
            $table->integer('dishes_count');
            $table->boolean('paymart_type');
            $table->integer('paymart');
            $table->boolean('status');
            $table->unsignedBigInteger('user_id')->constrained();
            $table->unsignedBigInteger('admin_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storage_inputs');
    }
};
