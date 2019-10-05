<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('imagen', 255)->nullable();
          $table->string('titulo', 255)->nullable();
          $table->text('descripcion')->nullable();
          $table->string('enlace', 255)->nullable();
          $table->string('seccion', 255)->nullable();
          $table->boolean('orden')->default(1);
          $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('informacions');
    }
}
