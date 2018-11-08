<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detcompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detcompras', function (Blueprint $table) {
                    $table->increments('id_Detc');
					$table->string('Valor total',40);
					$table->integer('id_Com')->unsigned();
                    $table->foreign('id_Com')->references('id_Com')->on('Compras');
					$table->integer('id_Fac')->unsigned();
                    $table->foreign('id_Fac')->references('id_Fac')->on('Facturas');
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
        Schema::drop('Detcompras');  
    }
}
