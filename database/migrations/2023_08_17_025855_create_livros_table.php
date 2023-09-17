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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->text('titulo');
            $table->string('autor')->nullable();
            $table->string('editora')->nullable();
            $table->string('quantidade')->nullable();
            $table->string('categoria')->nullable();
            $table->string('cor')->nullable();
            $table->string('local')->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
