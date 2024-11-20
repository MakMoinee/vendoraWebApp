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
        Schema::create('coin_count_logs', function (Blueprint $table) {
            $table->id('clID')->autoIncrement();
            $table->integer('userID')->nullable(false);
            $table->decimal('totalAmount', 10, 2)->nullable(false);
            $table->decimal('totalTenCoin', 10, 2)->nullable(false);
            $table->decimal('totalFiveCoin', 10, 2)->nullable(false);
            $table->decimal('totalPesoCoin', 10, 2)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coin_count_logs');
    }
};
