<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Ventas', function (Blueprint $table) {
                     $table->increments('id_Vent');
                     $table->integer('cantidad');
                     $table->date('fecha');
                     $table->integer('Factura');
                     $table->string('Total',40);
                     $table->integer('id_Cli')->unsigned();
                     $table->foreign('id_Cli')->references('id_Cli')->on('Clientes');
                     $table->integer('id_Tra')->unsigned();
                     $table->foreign('id_Tra')->references('id_Tra')->on('Trabajadores');
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
       Schema::drop('Ventas');
    }
}
