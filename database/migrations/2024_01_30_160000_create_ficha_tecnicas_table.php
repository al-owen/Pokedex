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
        Schema::create('ficha_tecnicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pokemon_id')->nullable()->unique();
            $table->foreign('pokemon_id')
            ->references('id')
            ->on('pokemons')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('region_id')->constrained();
            $table->string('tipo_pokeball');
            $table->unsignedBigInteger('entrenador_id');
            $table->date('fecha_captura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_tecnicas');
    }
};
