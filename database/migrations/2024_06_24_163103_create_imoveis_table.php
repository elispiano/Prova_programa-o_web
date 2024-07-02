<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
{
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proprietario_id');
            $table->timestamps();

            $table->foreign('proprietario_id')->references('id')->on('proprietarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
};
