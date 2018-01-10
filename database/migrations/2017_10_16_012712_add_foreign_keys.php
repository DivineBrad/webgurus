<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Careers', function($table) {
            $table->foreign('group_id')->references('group_id')->on('Career_Groups')->onDelete('cascade');
        });
    Schema::table('Indicators', function($table) {
            $table->foreign('type_id')->references('type_id')->on('Indicator_Types')->onDelete('cascade');
        });
    Schema::table('User_Careers', function($table) {
            $table->foreign('user_id')->references('user_id')->on('Users')->onDelete('cascade');
            $table->foreign('career_id')->references('career_id')->on('Careers')->onDelete('cascade');
        });
    Schema::table('Career_Indicators', function($table) {            
            $table->foreign('career_id')->references('career_id')->on('Careers')->onDelete('cascade');
            $table->foreign('indicator_id')->references('indicator_id')->on('Indicators')->onDelete('cascade');
        });
    Schema::table('User_Indicators', function($table) {
            $table->foreign('user_id')->references('user_id')->on('Users')->onDelete('cascade');
            $table->foreign('indicator_id')->references('indicator_id')->on('Indicators')->onDelete('cascade');
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
