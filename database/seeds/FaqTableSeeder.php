<?php

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->insert([
            'text1' => 'Get answers to frequently asked questions',
            'text2' =>'In case you havent found the answer for your question please feel free to',
            'text3' => 'contact us',
            'text4' => ', our customer support will be happy to help you.',
            'q1' => '1. What is Careerinsights ?',
            'q2' => '2. How is Careerinsights different from other career related website ?',
            'q3' => '3. How do I choose my career path from the suggestion provided ?',
            'q4' => '4. How much would Careerinsights cost me ?',
            'q5' => '5. What are job alerts ?',
            'ans1' => 'Careerinsights is the worlds largest career suggesting organization who helps a person to choose a correct career path for him/her.',
            'ans2' => 'Careerinsights is a job search engine that specializes in choosing career paths for a new employee and also find a job directly',
            'ans2_1'=> 'from employer websites. We are the first one who came up with such concept.',
            'ans3' => 'Careerinsights  provides career guidance to users based on their personality traits, skills and their passions.',
            'ans3_1' => 'So you should choose a career path which suits your passion well. If your passion will be your career then work wont be work anymore it would be like playing a game.',
            'ans4' => 'Get best suggestion from  Careerinsights as you would like for free, without worrying about subscriptions or up-front fees.',
            'ans4_1' => 'Our Motto is to help a person choose a right career path for them and we are happy to help.',
            'ans5' => 'With jobs alerts, you can find a suitable for job for you after you choose your career path and recieve an email when new results meet your search criteria.'
           

            ]
            );
    }
}
