<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScannedpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scannedpoints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('scanned_at');

            $table->unsignedBigInteger('operator_id');
            $table->foreign('operator_id')->references('id')->on('employees');
            $table->unsignedBigInteger('scanround_id');
            $table->foreign('scanround_id')->references('id')->on('scanrounds');
            $table->unsignedBigInteger('Scanpoint_id');
            $table->foreign('scanpoint_id')->references('id')->on('scanpoints');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scannedpoints');
    }
}
