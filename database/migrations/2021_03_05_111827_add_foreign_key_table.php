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
            $table->unsignedBigInteger('auto_id');
            $table->foreign('auto_id')->references('id')->on('autos')->constrained('autos');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user')->constrained('users');
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
