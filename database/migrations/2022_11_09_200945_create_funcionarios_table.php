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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profissao_id')->references('id')->on('profissaos');
            $table->integer('user_id')->nullable();
            $table->string('num_funcionario')->unique();
            $table->string('nome');
            $table->string('email')->unique();
            $table->double('salario', 10,2);
            $table->double('subsidio', 10,2);
            $table->string('telefone')->nullable();
            $table->string('telemovel');
            $table->date('data_nasc');
            $table->string('endereco');
            $table->string('provincia');
            $table->string('nacionalidade');
            $table->string('foto');
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
        Schema::dropIfExists('funcionarios');
    }
};
