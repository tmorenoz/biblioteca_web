<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('activities', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre')->nullable();
          $table->date('fecha')->nullable();
          $table->text('descripcion')->nullable();
          $table->string('hora', 20)->nullable();
          $table->string('lugar')->nullable();
          $table->text('descripcion2')->nullable();
          $table->string('banner')->nullable();
          $table->string('autor')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
