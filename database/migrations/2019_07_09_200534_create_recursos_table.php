<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->text('source')->nullable();
            $table->text('languaje')->nullable();
            $table->text('relation')->nullable();
            $table->text('coverage')->nullable();
            $table->text('creator')->nullable();
            $table->text('publisher')->nullable();
            $table->text('contributor')->nullable();
            $table->text('_right')->nullable();
            $table->text('date')->nullable();
            $table->string('type', 250)->nullable();
            $table->string('format', 250)->nullable();
            $table->text('identifier')->nullable();
            $table->text('sys_identifier')->nullable();
            $table->text('sys_datestamp')->nullable();
            $table->text('sys_repository')->nullable();
            $table->text('sys_fetchURL')->nullable();
            $table->boolean('estado')->nullable();
            $table->timestamps();
        });

        // Full Text Index
        DB::statement('ALTER TABLE recursos ADD FULLTEXT fulltext_index (title, subject, description)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos');
    }
}
