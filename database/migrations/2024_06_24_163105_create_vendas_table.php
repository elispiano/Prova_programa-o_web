<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->unsignedBigInteger('vendedor_id');
            $table->unsignedBigInteger('imovel_id');
            $table->timestamps();

            $table->foreign('vendedor_id')->references('id')->on('funcionarios')->onDelete('cascade');
            $table->foreign('imovel_id')->references('id')->on('imoveis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendas');
    }
};
