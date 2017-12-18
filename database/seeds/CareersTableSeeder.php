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
            'title' => 'Software Developer',
            'description' => 'The use of computers within organization',
            'avg_sal_jnr' =>'49397',
            'avg_sal_snr' =>'88024',
            'unemployment_rate' => '2',
            'job_satisfaction' =>'Average'
        ]
       );

       DB::table('careers')->insert([
        'group_id' => 2,
        'title' => 'Teacher',
        'description' => 'Explain and impart knowledge to students',
        'avg_sal_jnr' =>'42397',
        'avg_sal_snr' =>'60024',
        'unemployment_rate' => '7',
        'job_satisfaction' =>'Low'
        ]
         );
      

        DB::table('careers')->insert([
            'group_id' => 4,
            'title' => 'Trial Lawyer',
            'description' => 'Investigate law and present reasonable facts to win a law case',
            'avg_sal_jnr' =>'52397',
            'avg_sal_snr' =>'70024',
            'unemployment_rate' => '4',
            'job_satisfaction' =>'Average'
            ]
             );
            }
}
