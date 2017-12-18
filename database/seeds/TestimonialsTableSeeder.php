<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'Jerry Sally',
            'position' =>'Accountant',
            'company' => 'RollyGroup',
            'testimony' => 'I was confused as to what career path I should choose. After using this website I got and understanding on 
            what jobs wold best suit me.',
            'photo' => 'img/person-1.jpg'
            ]
            );
        DB::table('testimonials')->insert([
            'name' => 'Manly Johnson',
            'position' =>'Programmer',
            'company' => 'LemonGross',
            'testimony' => 'A friend of mine suggested this website and I tried the insights helper which guided me to my dream job.',
            'photo' => 'img/person-2.jpg'
            ]
            );
        DB::table('testimonials')->insert([
            'name' => 'Larry Bob',
            'position' =>'Tutor',
            'company' => 'Mahantin Run',
            'testimony' => 'I have never seen a website which gave me so much useful career information.',
            'photo' => 'img/person-3.png'
            ]
            );
        DB::table('testimonials')->insert([
            'name' => 'Bob McIntyre',
            'position' =>'Tutor',
            'company' => 'Spelling Challenge',
            'testimony' => 'Using the insights was the best decision that I ever made.',
            'photo' => 'img/person-4.jpg'
            ]
            );
    }
}
