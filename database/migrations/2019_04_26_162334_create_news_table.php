<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('news', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre')->nullable();
          $table->string('slug')->nullable();
          $table->string('imagen')->nullable();
          $table->string('banner')->nullable();
          $table->date('fecha')->nullable();
          $table->string('hora', 20)->nullable();
          $table->text('descripcion')->nullable();
          $table->string('titulo')->nullable();
          $table->text('descripcion2')->nullable();
          $table->string('relacion', 100)->nullable();
          $table->string('tipo')->nullable();
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
      Schema::dropIfExists('news');
    }
}
