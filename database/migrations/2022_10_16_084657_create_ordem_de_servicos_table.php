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
        Schema::create('ordem_de_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->references('id')->on('clientes');
            $table->foreignId('veiculo_id')->references('id')->on('veiculos');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('produto_id')->references('id')->on('produtos');
            $table->date('data_entrega');
            $table->date('data_revisao');
            $table->text('descricao');
            $table->string('tecnico');
            $table->text('recomendacao')->nullable();
            $table->double('preco', 10,2);
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
};
