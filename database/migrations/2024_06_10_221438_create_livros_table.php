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
            $table->foreignId('usuario')->references('id')->on('users');
            $table->string("autor");
            $table->string("titulo");
            $table->string("subtitulo");
            $table->string("edicao");
            $table->string("editora");
            $table->integer("ano_de_publicacao");
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
