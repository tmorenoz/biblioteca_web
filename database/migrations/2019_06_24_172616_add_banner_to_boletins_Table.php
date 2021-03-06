<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBannerToBoletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('boletins', function (Blueprint $table) {
        $table->string('banner', 255)->nullable()->after('imagen');
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
        $table->dropColumn('banner');
      });
    }
}
