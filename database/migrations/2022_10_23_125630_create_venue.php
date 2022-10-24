<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('building_name');
            $table->unsignedBigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('wo_desc_id')->unsigned();
            $table->foreign('wo_desc_id')->references('id')->on('wo_desc');
            $table->decimal('price');
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
        Schema::dropIfExists('venue');
    }
}
