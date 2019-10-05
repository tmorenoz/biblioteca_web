<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotecas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('imagen')->nullable();
          $table->string('titulo')->nullable();
          $table->text('descripcion')->nullable();
          $table->date('fecha')->nullable();
          // $table->integer('novedad_id')->unsigned();
          $table->timestamps();

          // $table->foreign('novedad_id')->nullable()->references('id')->on('news');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bibliotecas');
    }
}
