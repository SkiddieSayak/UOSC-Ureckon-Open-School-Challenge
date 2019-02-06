<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team');
            $table->string('school');
            $table->string('event');

            $table->string('name1')->nullable();
            $table->string('class1')->nullable();
            $table->string('contact1')->nullable();
            $table->string('name2')->nullable();
            $table->string('class2')->nullable();
            $table->string('contact2')->nullable();
            $table->string('name3')->nullable();
            $table->string('class3')->nullable();
            $table->string('contact3')->nullable();
            $table->string('name4')->nullable();
            $table->string('class4')->nullable();
            $table->string('contact4')->nullable();
            $table->string('name5')->nullable();
            $table->string('class5')->nullable();
            $table->string('contact5')->nullable();

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
        Schema::dropIfExists('participants');
    }
}
