<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNombreToRedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('redes', function (Blueprint $table) {
        $table->string('nombre', 200)->nullable()->after('enlace');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('redes', function (Blueprint $table) {
        $table->dropColumn('nombre');
      });
    }
}
