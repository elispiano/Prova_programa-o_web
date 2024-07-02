<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietariosTable extends Migration
{
    public function up()
    {
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->unsignedBigInteger('telefone_id');
            $table->timestamps();

            $table->foreign('telefone_id')->references('id')->on('telefones')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proprietarios');
    }
};
