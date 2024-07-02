<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVivendasTable extends Migration
{
    public function up()
    {
        Schema::create('vivendas', function (Blueprint $table) {
            $table->id();
            $table->integer('ano_construcao');
            $table->integer('area');
            $table->string('localizacao');
            $table->string('tipologia');
            $table->decimal('preco', 15, 2);
            $table->unsignedBigInteger('imovel_id');
            $table->timestamps();

            $table->foreign('imovel_id')->references('id')->on('imoveis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vivendas');
    }
}
;
