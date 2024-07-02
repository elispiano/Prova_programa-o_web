<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('salario', 10, 2);
            $table->unsignedBigInteger('agencia_id');
            $table->timestamps();

            $table->foreign('agencia_id')->references('id')->on('agencias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
