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
        Schema::create('libro', function (Blueprint $table) {
            $table->id('id_libro');
            $table->string('titulo');
            $table->string('portada')->nullable();
            $table->string('archivo_pdf')->nullable();
            $table->unsignedBigInteger('cod_autor');
            $table->unsignedBigInteger('cod_genero');
            $table->unsignedBigInteger('cod_editorial');
            $table->unsignedBigInteger('cod_area'); // Relación con el área

            $table->foreign('cod_autor')->references('id_autor')->on('autor');
            $table->foreign('cod_genero')->references('id_genero')->on('genero');
            $table->foreign('cod_editorial')->references('id_editorial')->on('editorial');
            $table->foreign('cod_area')->references('id_area')->on('area'); // Llave foránea para área
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro');
    }
};
