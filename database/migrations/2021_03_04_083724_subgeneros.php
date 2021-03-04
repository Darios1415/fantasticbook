<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subgeneros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subgeneros',function(Blueprint $table){
            $table->increments('idsubgen');
            $table->string('nombre' ,50);
            
            $table->integer('idgen')->unsigned();
            $table->foreign('idgen')->references('idgen')->on('generos');

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
        Schema::drop('subgeneros');
    }
}