<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->increments('id');
            //$table->timestamps();
            $table->string('nome',100);
            $table->integer('genero_id')->unsigned(); 
            $table->foreign('genero_id')->references('id')->on('generos');

            $table->integer('cantor_id')->unsigned(); 
            $table->foreign('cantor_id')->references('id')->on('cantors');
        
            $table->integer('albuns_id')->unsigned(); 
            $table->foreign('albuns_id')->references('id')->on('albums');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicas');
    }
}
