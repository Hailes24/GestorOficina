<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_produtos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('idProduto');
            $table->foreign('idProduto')->references('id')->on('produtos');
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
        Schema::dropIfExists('cliente_produtos');
    }
}
