<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annual_leave_id');
            $table->date('date');
            $table->timestamps();

            $table->foreign('annual_leave_id')->references('id')->on('annual_leaves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave_dates');
    }
}
