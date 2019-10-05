<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquivalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equivalent', function(Blueprint $table){
            $table->increments('id');
            $table->string('meta', 255);
            $table->string('termino', 255);
            $table->string('equivalencia', 255);
            $table->boolean('estado');
            $table->timestamps();

            $table->index(['meta', 'termino', 'estado']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equivalent');
    }
}
