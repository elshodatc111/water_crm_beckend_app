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
            $table->foreignId('storage_id')->constrained('storages')->onDelete('cascade');
            $table->foreignId('currer_id')->nullable();
            $table->enum('dishes_status', ['bosh_qaytar', 'bakal_sotildi', 'bakal_brak']);
            $table->integer('dishes_count')->default(0);
            $table->enum('paymart_type', ['naqt', 'plastik', 'pul_ko‘chirish', 'chegirma']);
            $table->integer('paymart')->default(0);
            $table->enum('status', ['pedding', 'guard', 'admin', 'success'])->default('pedding');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('admin_id')->nullable();
            $table->text('commit')->nullable();
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
