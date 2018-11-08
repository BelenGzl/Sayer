<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
                    $table->increments('id_Prod');
					$table->integer('costo');
					$table->string('unidad',40);
					$table->string('productos',40);
					$table->string('clave',40);
					$table->integer('maximos');
					$table->integer('minimos');
					$table->string('reorden',40);
					$table->integer('id_Cat')->unsigned();
					$table->foreign('id_Cat')->references('id_Cat')->on('categorias');
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
       Schema::drop('Productos');
    }
}
