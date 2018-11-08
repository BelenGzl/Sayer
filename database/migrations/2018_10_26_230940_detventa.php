<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detventa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detventas', function (Blueprint $table) {
                   $table->increments('id_Detv');
                   $table->string('Cantidad Producto',40);
                   $table->integer('Precio Unitario');
                   $table->integer('total');
                   $table->integer('id_Vent')->unsigned();
                   $table->foreign('id_Vent')->references('id_Vent')->on('Ventas');
                   $table->integer('id_Prod')->unsigned();
                   $table->foreign('id_Prod')->references('id_Prod')->on('Productos');
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
       Schema::drop('Detventas');
    }
}
