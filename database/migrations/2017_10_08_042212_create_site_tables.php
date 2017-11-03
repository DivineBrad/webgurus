<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('Careers', function (Blueprint $table) {
            $table->increments('career_id');
            $table->string('title');
            $table->string('description');
            $table->integer('group_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('Career_Groups', function (Blueprint $table) {
            $table->increments('group_id');
            $table->string('group_title');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('Admin_Users', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('Indicators', function (Blueprint $table) {
            $table->increments('indicator_id');
            $table->string('indicator');
            $table->string('description');
            $table->integer('type_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('Indicator_Types', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('type');
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
 