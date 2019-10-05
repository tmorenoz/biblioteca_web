<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescripcionToDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('datos', function (Blueprint $table) {
        $table->text('descripcion')->nullable()->after('nombre');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('datos', function (Blueprint $table) {
        $table->dropColumn('descripcion');
      });
    }
}
