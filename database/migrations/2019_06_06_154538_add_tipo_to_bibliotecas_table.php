<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoToBibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('bibliotecas', function (Blueprint $table) {
        $table->string('estado', 50)->nullable()->after('fecha');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('bibliotecas', function (Blueprint $table) {
        $table->dropColumn('estado');
      });
    }
}
