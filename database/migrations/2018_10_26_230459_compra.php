<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Compras', function (Blueprint $table) {
                      $table->increments('id_Com');
                      $table->integer('cantidad');
                      $table->date('fecha');
                      $table->integer('Factura');
                      $table->string('Total',40);
                      $table->integer('id_Prov')->unsigned();
                      $table->foreign('id_Prov')->references('id_Prov')->on('Proveedores');
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
        Schema::drop('Compras');
    }
}
