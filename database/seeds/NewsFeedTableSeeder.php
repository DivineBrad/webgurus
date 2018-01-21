<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewsFeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsfeed')->insert([
           
            'title' => 'The most creative jobs available',
            'date' => Carbon::create('2018','01','16'),
            'info' => 'With the current state of affairs, 
            life is tough especially if you have no source of income. 
            After years of school, getting a job is never automatic despite your
            impressive qualifications. With many falling short of few jobs available 
            every year, the young generation are seeking alternative ways to earn of 
            living. This has led many to the cyber space to search for genuine jobs and 
            it has become a nightmare due to scammers. Despite the sad state of online jobs, 
            there are actually some good options if you know where to look.

            Get your research boots on and you will come across some of these legit online
             jobs. Guess what? You can do it in your own comfort at home and keep you 
             really busy.',
            
        ]
       );

       DB::table('newsfeed')->insert([
         
            'title' => 'Make Your Mark Internship Program',
            'date' => Carbon::create('2018','01','08'),
            'info' => 'Mercedes-Benz Canada needs fans like you!



            What’s the Make Your Mark Internship Program?
            
            
            
            The Make Your Mark Internship Program is Mercedes-Benz Canada’s internship program where recently graduated candidates have the opportunity to gain experience with an exciting brand and culture. You’ll have the opportunity to make an impact and apply your skills and ideas to various duties and projects, providing assistance to support the team and its overall goals and objectives.
            
            What it means to be a fan
            
            
            
            Everything starts with fans. Mercedes-Benz Canada is the number one automotive company in Canada, three years in a row. We’re looking for interns who are enthusiastically devoted to Mercedes-Benz. You love our brand and have the drive to learn about the automotive industry. You’re 
            impressed with the Mercedes-Benz legacy. You can easily identify what the 
            Mercedes-Benz star represents. And you’re eager to live Mercedes-Benz values.
            
            Our commitment to excellent employee and customer journeys is guided by our 
            Bond, Home, and Legacy. Our Bond is commitment to building emotional engagement. Our Home is hospitality, creating a welcome sense of place. And Our Legacy means taking pride in sharing our story. As a fan, are you ready to bring that sense of welcome to Mercedes-Benz Canada?',
        ]
         );
      

        DB::table('newsfeed')->insert([
            
           
            'title' => 'Don\'t expect a big pay hike in 2018, what didn\'t go wrong in 2017, and more trending stories',
            'date' => Carbon::create('2018','01','01'),
            'info' => 'During the week, the Daily Rundown brings you the day’s trending professional news. On the weekend, we try to keep you current on the big ideas that can help you see what’s coming. Read on and join the conversation.

            Don’t expect a big raise this year. US unemployment is at a 17-year low and many companies are expecting windfall profits from the new tax bill — factors which might prompt employers to raise wages. But the average wage increase has been 3% for the past five years and, reports Bloomberg, it appears corporations are going to stick with that. Typically, a tight labor market would increase competition for workers and boost wages, but the diminishing strength of unions combined with advances in automation and the rise of contract work have kept pay rates in place
            . And many companies are looking to avoid the risk of permanent pay raises by offering bonuses 
            to high performers instead. • Share your thoughts: #NoPayRaise',
            ]
             );
        
    }
}
