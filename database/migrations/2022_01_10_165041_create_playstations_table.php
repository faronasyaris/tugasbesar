<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaystationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playstations', function (Blueprint $table) {
            $table->id('id_playstation');
            $table->string('name');
            $table->date('booking_date');
            $table->time('booking_duration');
            $table->date('return_time');
            $table->string('guarantee');
            $table->string('status');
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
        Schema::dropIfExists('playstations');
    }
}
