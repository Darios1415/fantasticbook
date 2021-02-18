<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Generos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generos',function(Blueprint $table){
            $table->increments('idg');
            $table->string('nombre' ,50);
            $table->string('descripcion' ,50);

            $table->integer('idsg')->unsigned();
            $table->foreign('idsg')->references('idsg')->on('subgeneros');


            $table->rememberToken();
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
        Schema::drop('generos');
    }
}
