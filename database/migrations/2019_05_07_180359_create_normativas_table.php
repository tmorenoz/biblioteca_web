<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNormativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('normativas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre')->nullable();
          $table->string('statu')->nullable();
          $table->string('imagen', 200)->nullable();
          $table->string('banner', 200)->nullable();
          $table->text('descripcion')->nullable();
          $table->string('enlace', 200)->nullable();
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
        Schema::dropIfExists('normativas');
    }
}
