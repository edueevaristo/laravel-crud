<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 128);
            $table->integer('idade');
            $table->string('tipocadastro', 128);
            $table->string('turma', 128);
            $table->string('ano', 128);
            $table->string('responsavel', 128);
            $table->string('qtdereprovas', 128);
            $table->string('escolaanterior');
            $table->date('data_cadastro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
