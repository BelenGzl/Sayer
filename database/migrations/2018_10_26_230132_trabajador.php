<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trabajador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Trabajadores', function (Blueprint $table) {
                    $table->increments('id_Tra');
					$table->string('nombre',40);
					$table->string('apellidop',40);
					$table->string('apellidom',40);
					$table->string('calle',200);
					$table->integer('numero');
					$table->string('colonia',200);
					$table->integer('cp');
					$table->integer('tel');
					$table->string('correo',100);
					$table->integer('id_Mun')->unsigned();
                    $table->foreign('id_Mun')->references('id_Mun')->on('Municipios');
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
        Schema::drop('Trabajadores');
    }
}
