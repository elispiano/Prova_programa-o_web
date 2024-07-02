<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrenosTable extends Migration
{
    public function up()
    {
        Schema::create('terrenos', function (Blueprint $table) {
            $table->id();
            $table->string('zona');
            $table->integer('area');
            $table->unsignedBigInteger('imovel_id');
            $table->timestamps();

            $table->foreign('imovel_id')->references('id')->on('imoveis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('terrenos');
    }
};
