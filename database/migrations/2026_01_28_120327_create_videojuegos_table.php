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
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->string('descripcion');
            $table->integer('numero')->nullable()->default(0);
            $table->string('genero');
            $table->string('subgenero')->nullable();
            $table->integer('mes');
            $table->integer('año');
            $table->foreignId('desarrollador_id')->constrained();
            $table->foreignId('editor_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videojuegos');
    }
};
