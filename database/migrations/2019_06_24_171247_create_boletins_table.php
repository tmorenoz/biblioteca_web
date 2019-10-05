<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen')->nullable();
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->date('fecha')->nullable();
            $table->boolean('estado')->nullable()->default(1);
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
        Schema::dropIfExists('boletins');
    }
}
