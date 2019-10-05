<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCollumsMarc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recursos', function($table){
            $table->text('dcn_dewey')->nullable()->after('identifier');
            $table->text('edition')->nullable()->after('identifier');
            $table->text('series')->nullable()->after('identifier');
            $table->text('cat_source')->nullable()->after('identifier');
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
            $table->dropColumn('dcn_dewey');
            $table->dropColumn('edition');
            $table->dropColumn('series');
            $table->dropColumn('cat_source');
        });
    }
}
