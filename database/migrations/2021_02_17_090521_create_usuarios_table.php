<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('foto',10);
            $table->string('nombre',50);
            $table->string('app',50);
            $table->string('apm',50);
            $table->string('fn',15);
            $table->integer('telefono',10);
            $table->string('estado',50);
            $table->string('municipio',50);
            $table->string('calle',50);
            $table->integer('num_i',10);
            $table->string('type',50);
            $table->string('cuenta',50);
            $table->string('correo',50);
            $table->string('contra',50);
            $table->string('genero',50);
            $table->string('activo',50);
            $table->string('referencia',100);
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
        Schema::dropIfExists('usuarios');
    }
}
