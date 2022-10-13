<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idCategoria');
            $table->foreign('idCategoria')->references('id')->on('categorias');
            $table->unsignedBigInteger('idFuncionario');
            $table->foreign('idFuncionario')->references('id')->on('users');
            $table->string('precoCompra');
            $table->string('precoVenda');
            $table->string('lucro');
            $table->string('nome');
            $table->string('codigoBarra');
            $table->string('placa');
            $table->string('stoqueminimo');
            $table->string('stoquemaximo');
            $table->string('stok');
            $table->string('foto');
            $table->string('marca');
            $table->string('localizacao');
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
        Schema::dropIfExists('produtos');
    }
}
