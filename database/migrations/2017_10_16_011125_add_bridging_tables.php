<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBridgingTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_Careers', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('career_id')->unsigned();
            $table->primary(['user_id', 'career_id']);
            $table->timestamps();       
        });
        Schema::create('Career_Indicators', function (Blueprint $table) {
            $table->integer('career_id')->unsigned();
            $table->integer('indicator_id')->unsigned();
            $table->primary(['career_id', 'indicator_id']);
            $table->timestamps();
        });
        Schema::create('User_Indicators', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('indicator_id')->unsigned();
            $table->primary(['user_id', 'indicator_id']);
          
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
