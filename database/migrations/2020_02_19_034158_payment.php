<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('STUDENTID');
            $table->string('STUDENTNAME');
            $table->string('MONTH');
            $table->bigInteger('AMOUNT');
            $table->string('CREATED_DATETIME');
            $table->string('CREATED_BY');
            $table->string('UPDATED_DATETIME');
            $table->string('UPDATED_BY');
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
        //
    }
}
