<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrdenToBoletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('boletins', function (Blueprint $table) {
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
      Schema::table('boletins', function (Blueprint $table) {
        $table->dropColumn('orden');
      });
    }
}
