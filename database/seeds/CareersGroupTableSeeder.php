<?php

use Illuminate\Database\Seeder;

class CareersGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('career_groups')->insert([
            'group_title' => 'IT',
            'description' => 'The use of computers within organization',
        ]
       );
       DB::table('career_groups')->insert([
        'group_title' => 'Education',
        'description' => 'The imparting of knowledge to students and roles to enable learning',
        ]
        );
        DB::table('career_groups')->insert([
        'group_title' => 'Medical',
        'description' => 'Deals with the human body',
        ]
        );
        DB::table('career_groups')->insert([
            'group_title' => 'Law',
            'description' => 'Deals with the understanding of law',
            ]
            );
        DB::table('career_groups')->insert([
            'group_title' => 'Engineering',
            'description' => 'The application of knowledge to build and design systems',
            ]
            );
        DB::table('career_groups')->insert([
            'group_title' => 'Arts',
            'description' => 'The use of visual, audio or perfomance in expressing creativity',
            ]
            );
        DB::table('career_groups')->insert([
            'group_title' => 'Sports',
            'description' => 'The use of physical and mental ability in engaging in competitive activities',
            ]
            );
         DB::table('career_groups')->insert([
                'group_title' => 'Managerial',
                'description' => 'Demonstrating leadership in guiding, motivating and organizing work activities of other people',
                ]
                );
        DB::table('career_groups')->insert([
            'group_title' => 'Science',
            'description' => 'The study of the physical world through the scientific method',
            ]
            );
    }
}
