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
        Schema::create('faturas', function (Blueprint $table) {
            $table->id();
            $table->integer('num_item');
            $table->integer('qtd');
            $table->double('preco_unit', 10,2);
            $table->double('preco_total', 10,2);
            $table->foreignId('produto_id')->references('id')->on('produtos');
            $table->foreignId('venda_id')->references('id')->on('vendas');
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
        Schema::dropIfExists('faturas');
    }
};
