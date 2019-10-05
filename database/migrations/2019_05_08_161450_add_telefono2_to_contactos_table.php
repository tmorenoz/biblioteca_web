<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTelefono2ToContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('contactos', function (Blueprint $table) {
        $table->string('telefono2', 20)->nullable()->after('telefono');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('contactos', function (Blueprint $table) {
        $table->dropColumn('telefono2');
      });
    }
}
