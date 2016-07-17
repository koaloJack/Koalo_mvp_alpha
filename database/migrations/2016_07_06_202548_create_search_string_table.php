<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchStringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('searchstrings', function (Blueprint $table) {
          $table->increments('id');
          $table->string('searchstring');
          $table->integer('table_id')->unsigned();;
          $table->timestamps();
      });

      Schema::table('searchstrings', function(Blueprint $table) {
        $table->foreign('table_id')->references('id')->on('topics');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
