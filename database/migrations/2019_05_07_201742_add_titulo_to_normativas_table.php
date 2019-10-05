<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTituloToNormativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('normativas', function (Blueprint $table) {
        $table->string('titulo', 200)->nullable()->after('nombre');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('normativas', function (Blueprint $table) {
        $table->dropColumn('titulo');
      });
    }
}
