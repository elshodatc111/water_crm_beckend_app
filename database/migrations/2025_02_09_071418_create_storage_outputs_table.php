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
        Schema::create('storage_outputs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('storage_id')->constrained();
            $table->unsignedBigInteger('user_id')->constrained();
            $table->unsignedBigInteger('currer_id');
            $table->boolean('status');
            $table->integer('dishes_count');
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storage_outputs');
    }
};
