<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatering extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catering', function (Blueprint $table) {
            $table->id();
            $table->string('ctr_name');
            $table->unsignedBigInteger('wo_desc_id')->unsigned();
            $table->foreign('wo_desc_id')->references('id')->on('wo_desc');
            $table->unsignedBigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('ctg_id')->unsigned();
            $table->foreign('ctg_id')->references('id')->on('category');
            $table->unsignedBigInteger('pkg_id')->unsigned();
            $table->foreign('pkg_id')->references('id')->on('packages');
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
        Schema::dropIfExists('catering');
    }
}
