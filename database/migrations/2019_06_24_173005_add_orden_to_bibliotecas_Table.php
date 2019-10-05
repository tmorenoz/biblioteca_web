<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrdenToBibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('bibliotecas', function (Blueprint $table) {
        $table->boolean('orden')->default(1)->after('fecha');
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
        $table->dropColumn('orden');
      });
    }
}
