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
        Schema::create('licencias', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('slug')->unique();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->unsignedBigInteger('tipo_licencia_id');
            $table->unsignedBigInteger('profesore_id');

            $table->foreign('tipo_licencia_id')->references('id')->on('tipo_licencias')->onDelete('cascade');
            $table->foreign('profesore_id')->references('id')->on('profesores')->onDelete('cascade');

            $table->boolean('estado')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licencias');
    }
};
