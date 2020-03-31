<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('idrating');
            $table->integer('level');
            $table->string('name');
            $table->integer('firstpoint');
            $table->integer('lastpoint');
            $table->integer('idcreator')->unsigned();
            $table->foreign('idcreator')->references('iduser')->on('users')->onDelete('cascade');
            $table->integer('idalterer')->unsigned();
            $table->foreign('idalterer')->references('iduser')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('ratings');
    }
}
