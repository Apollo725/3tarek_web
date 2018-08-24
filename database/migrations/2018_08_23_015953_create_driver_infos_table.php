<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->unsignedInteger('rank_id');
            $table->foreign('rank_id')->references('id')->on('ranks');
            $table->double('point', 8, 2);
            $table->integer('star');
            $table->double('distance', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_infos');
    }
}
