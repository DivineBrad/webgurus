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
    }
}
