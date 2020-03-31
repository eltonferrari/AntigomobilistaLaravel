<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('idmessage');
            $table->integer('idsender')->unsigned();
            $table->foreign('idsender')->references('iduser')->on('users')->onDelete('cascade');
            $table->integer('idreceptor')->unsigned();
            $table->foreign('idreceptor')->references('iduser')->on('users')->onDelete('cascade');
            $table->string('message');
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
        Schema::dropIfExists('postmessages');
    }
}
