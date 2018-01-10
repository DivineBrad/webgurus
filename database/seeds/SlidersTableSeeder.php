<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'slider_name' => 'Home Slider 1',
            'slider_img' => 'slide1.jpg',
            'slider_header' => 'Your dream Career awaits!',
            'description' =>'We guide on your career path.',
        ]
       );
       DB::table('sliders')->insert([
        'slider_name' => 'Home Slider 2',
        'slider_img' => 'slide2.jpg',
        'slider_header' => 'Find the best career for YOU!',
        'description' =>'We analyze your skills, traits and passions.',
        ]
        );
        DB::table('sliders')->insert([
            'slider_name' => 'Home Slider 3',
            'slider_img' => 'slide3.jpg',
            'slider_header' => 'We provide Insights',
            'description' =>'Get ready for the light bulb moment! .',
            ]
            );                
    }

}
