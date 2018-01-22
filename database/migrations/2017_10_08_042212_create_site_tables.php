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
            $table->decimal('avg_sal_jnr');
            $table->decimal('avg_sal_snr');            
            $table->integer('unemployment_rate');
            $table->string('job_satisfaction');            
            $table->integer('group_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('Career_Groups', function (Blueprint $table) {
            $table->increments('group_id');
            $table->string('group_title');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('Testimonials', function (Blueprint $table) {
            $table->increments('testimonial_id');
            $table->string('name');
            $table->string('position');
            $table->string('company');
            $table->text('testimony');
            $table->string('photo');
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
        Schema::create('Sliders', function (Blueprint $table) {
            $table->increments('slider_id');
            $table->string('slider_name');
            $table->string('slider_img');
            $table->string('slider_header');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('Indicator_Types', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('type');
            $table->timestamps();
        });
        Schema::create('About', function (Blueprint $table) {
            $table->increments('about_id');
            $table->string('heading1');
            $table->string('heading2');
            $table->string('heading3');
            $table->string('para1');
            $table->string('para2');
            $table->string('para3');
            $table->string('para4');
            $table->string('para5');
            $table->string('para6');
            $table->string('para7');
            $table->string('para8');
            $table->string('para9');
            $table->string('para0');
            $table->timestamps();
        });
        Schema::create('Faq', function (Blueprint $table) {
            $table->increments('faq_id');
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
            $table->string('text4');
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->string('ans1');
            $table->string('ans2');
            $table->string('ans2_1');
            $table->string('ans3');
            $table->string('ans3_1');
            $table->string('ans4');
            $table->string('ans4_1');
            $table->string('ans5');
            $table->timestamps();
        });
        Schema::create('Policy', function (Blueprint $table) {
            $table->increments('policy_id');
            $table->string('text12');
            $table->string('text13');
            $table->string('topic1');
            $table->text('text1');
            $table->string('topic2');
            $table->text('text2');
            $table->string('topic3');
            $table->text('text3');
            $table->string('topic4');
            $table->text('text4');
            $table->string('topic5');
            $table->text('text5');
            $table->string('topic6');
            $table->text('text6');
            $table->string('topic7');
            $table->text('text7');
            $table->string('topic8');
            $table->text('text8');
            $table->string('topic9');
            $table->text('text9');
            $table->string('topic10');
            $table->text('text10');
            $table->string('topic11');
            $table->text('text11');
            $table->timestamps();
            
        });

        Schema::create('Newsletter_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('user_id')->nullable();            
            $table->timestamps();
        });
        Schema::create('Newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('body');           
            $table->timestamps();
        });


        Schema::create('NewsFeed',function(Blueprint $table) {
            $table->increments('news_id');
            $table->string('title');
            $table->date('date');
            $table->longtext('info');
            $table->timestamps();
        });
        Schema::create('Menus', function(Blueprint $table){
            $table->increments('menu_id');
            $table->string('menu_name1');
            $table->string('menu_name2');
            $table->string('menu_name3');
            $table->string('menu_name4');
            $table->string('menu_sname1');
            $table->string('menu_sname2');
            $table->string('menu_sname3');
            $table->string('menu_sname4');
            $table->string('menu_sname5');
            $table->string('menu_link');
            $table->string('parent_id');
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
 