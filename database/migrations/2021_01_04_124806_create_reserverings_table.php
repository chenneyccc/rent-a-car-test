<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserverings', function (Blueprint $table) {
            $table->id();
            $table->date('begintijd');
            $table->date('eindtijd');
            $table->timestamps();
            $table->integer('auto_id')->unsigned();
            $table->integer('user_id')->unsigned();

        });

        Schema::table('reserverings', function($table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('auto_id')->references('id')->on('autos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserverings');
    }
}
