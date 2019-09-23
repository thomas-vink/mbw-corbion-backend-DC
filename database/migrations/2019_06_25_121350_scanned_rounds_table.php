<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScannedRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scannedrounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('scanneddate');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->unsignedBigInteger('scanpoint_id');
            $table->foreign('scanpoint_id')->references('id')->on('scanpoints');
            $table->unsignedBigInteger('shifttime_id');
            $table->foreign('shifttime_id')->references('id')->on('shifttimes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
