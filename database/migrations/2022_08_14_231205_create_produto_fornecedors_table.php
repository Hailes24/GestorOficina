<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_fornecedors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idFornecedor');
            $table->foreign('idFornecedor')->references('id')->on('fornecedores');
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
        Schema::dropIfExists('produto_fornecedors');
    }
}
