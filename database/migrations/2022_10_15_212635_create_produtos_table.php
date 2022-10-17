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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->string('foto');
            $table->string('cor')->nullable();
            $table->string('fabricante')->nullable();
            $table->string('localizacao')->nullable();
            $table->text('descricao')->nullable();
            $table->double('preco_compra', 10,2);
            $table->double('preco_venda', 10,2);
            $table->double('lucro', 10,2);
            $table->integer('qtd_stock');
            $table->foreignId('categoria_id')->references('id')->on('categorias');
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
};
