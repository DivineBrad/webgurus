<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'heading1' => 'About Career Insights',
            'heading2' =>'Reasons behind Careerinsights being number one.',
            'heading3' => 'Careerinsights advanced search.',
            'para1' => 'Welcome to Career Insights on the market! Our success is driven by the highest quality customer service. ',
            'para4' => 'Career Insights is the worlds largest career research and guidance website which helps persons to choose a correct career',
            'para6' => 'path based on their personality traits, skills and their passions. Our research into personality, behaviours and',
            'para7' => ' professinal skills together with an understanding of multiple industries, allows us to give useful Insights to persons',
            'para5' => 'which gives the useful guidance in the career decisions.',
            'para2' => 'Top three reasons why Careerinsights is different than other Career suggesting Boards:',
            'para3' => 'Use Careerinsights to gain a deep understanding of which career options best suit your personality, skills and passions.',
            'para8' => 'Provides deep insights into the best career options for you.',
            'para9' => 'Allows comparison of careers across industries.',
            'para0' => 'Provides insights into your own personality traits, skills and passion.'

            ]
            );
    }
}
