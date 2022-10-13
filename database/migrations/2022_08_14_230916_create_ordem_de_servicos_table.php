<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemDeServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        
        Schema::create('ordem_de_servicos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idFuncionario');
            $table->foreign('idFuncionario')->references('id')->on('users');
            $table->unsignedBigInteger('idproduto');
            $table->foreign('idproduto')->references('id')->on('produtos');
            $table->unsignedBigInteger('idVeiculo');
            $table->foreign('idVeiculo')->references('id')->on('veiculos');
            $table->string('dadaEntrega');
            $table->string('dataHora');
            $table->string('dataDaRevisao');
            $table->string('descricaoDoservico');
            $table->string('DescricaoCliente');
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
        Schema::dropIfExists('ordem_de_servicos');
    }
}
