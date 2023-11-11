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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profesore_id');
            $table->foreign('profesore_id')->references('id')->on('profesores')->onDelete('cascade');

            $table->dateTime('entrada')->unique()->nullable();
            $table->dateTime('salida')->unique()->nullable();

            $table->boolean('estado')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
