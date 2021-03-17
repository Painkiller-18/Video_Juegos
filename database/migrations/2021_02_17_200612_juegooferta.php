<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Juegooferta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('juegosoferts',function(Blueprint $table){
            $table->increments('id_of');

            $table->integer('id_p')->unsigned();
            $table->foreign('id_p')->references('id_p')->on('juegos');

            $table->integer('idtipo')->unsigned();
            $table->foreign('idtipo')->references('idtipo')->on('tipos');

            $table->string('fecha_ini',40);
            $table->string('fecha_fin',40);
            $table->string('motivo',40);
            $table->string('precio',40);
            $table->string('descuento',40);
            $table->string('Activo',40);
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
        schema::drop('juegosoferts');
    }
}
