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
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();

            $table->string('nombre',90);
            $table->string('slug');
            $table->bigInteger('dni')->unique();
            $table->string('email',75)->unique()->nullable();
            $table->bigInteger('telefono')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('cv')->nullable();
            
            $table->boolean('estado')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
