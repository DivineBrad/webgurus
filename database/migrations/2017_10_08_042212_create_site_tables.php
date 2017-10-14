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
        Schema::create('Users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('Careers', function (Blueprint $table) {
            $table->increments('career_id');
            $table->string('title');
            $table->string('description');
            $table->integer('group_id');
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
            $table->integer('type_id');
            $table->timestamps();
        });
        Schema::create('Indicator_Types', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('type');
            $table->timestamps();
        });
        // Schema::create('User_Careers', function (Blueprint $table) {
        //     $table->primary(['user_id', 'career_id']);
        //     $table->timestamps();       
        // });
        // Schema::create('Career_Indicators', function (Blueprint $table) {
        //     $table->primary(['career_id', 'indicator_id']);
        //     $table->timestamps();
        // });
        // Schema::create('User_Indicators', function (Blueprint $table) {
        //     $table->primary(['user_id', 'indicator_id']);
        //     $table->timestamps();
        // });

        // Schema::table('Careers', function($table) {
        //     $table->foreign('group_id')->references('group_id')->on('Career_Groups')->onDelete('cascade');
        // });
        // Schema::table('Indicators', function($table) {
        //     $table->foreign('type_id')->references('type_id')->on('Indicator_Types')->onDelete('cascade');
        // });
        // Schema::table('User_Careers', function($table) {
        //     $table->foreign('user_id')->references('user_id')->on('Users')->onDelete('cascade');
        //     $table->foreign('career_id')->references('career_id')->on('Careers')->onDelete('cascade');
        // });
        // Schema::table('Career_Indicators', function($table) {            
        //     $table->foreign('career_id')->references('career_id')->on('Careers')->onDelete('cascade');
        //     $table->foreign('indicator_id')->references('indicator_id')->on('Indicators')->onDelete('cascade');
        // });
        // Schema::table('User_Indicators', function($table) {
        //     $table->foreign('user_id')->references('user_id')->on('Users')->onDelete('cascade');
        //     $table->foreign('indicator_id')->references('indicator_id')->on('Indicators')->onDelete('cascade');
        // });

        

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
