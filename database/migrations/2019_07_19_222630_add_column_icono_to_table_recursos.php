<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnIconoToTableRecursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recursos', function($table){
            $table->text('icon')->nullable()->after('url_recurso');
            $table->text('country')->nullable()->after('url_recurso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recursos', function($table){
            $table->dropColumn('icon');
            $table->dropColumn('country');
        });
    }
}
