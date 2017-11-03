<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            'group_id' => 1,
            'title' => 'Programmer',
            'description' => 'The use of computers within organization',
        ]
       );

       DB::table('careers')->insert([
        'group_id' => 2,
        'title' => 'Teacher',
        'description' => 'Explain and impart knowledge to students',
        ]
         );
        }
}
