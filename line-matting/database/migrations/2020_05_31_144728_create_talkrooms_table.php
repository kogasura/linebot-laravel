<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalkroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talkrooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('category');
            $table->dateTime('starttime');
            $table->dateTime('endtime');
            $table->integer('amount');
            $table->string('meetingUrl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talkrooms');
    }
}
