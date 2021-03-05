<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //hello world
        Schema::table('reserverings', function (Blueprint $table) {
            $table->increments('auto_id');
            $table->foreign('auto_id')->references('id')->on('autos')->onDelete('cascade');
            $table->increments('user_id');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reserverings', function (Blueprint $table) {
            //
        });
    }
}
