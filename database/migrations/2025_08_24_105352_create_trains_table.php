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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // $table->string('departure');
            // $table->string('arrival');
            // $table->time('departure_time');
            // $table->time('arrival_time');
            // $table->integer('train_code')->unique();
            // $table->integer('number_carriages');
            // $table->boolean('is_punctual');
            // $table->boolean('is_cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
