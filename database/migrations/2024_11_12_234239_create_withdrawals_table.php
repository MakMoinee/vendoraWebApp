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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id('withdrawID')->autoIncrement();
            $table->integer('userID')->nullable(false);
            $table->string('ip')->nullable(false);
            $table->string('denomination')->nullable(false);
            $table->string('purpose')->nullable(false);
            $table->decimal('total', 10, 2)->nullable(false);
            $table->decimal('remaining', 10, 2)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};
