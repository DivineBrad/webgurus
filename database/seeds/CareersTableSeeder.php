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
        // IT jobs 
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

       //Education jobs

       DB::table('careers')->insert([
        'group_id' => 2,
        'title' => 'Teacher',
        'description' => 'Explain and impart knowledge to students',
        'avg_sal_jnr' =>'42397',
        'avg_sal_snr' =>'60024',
        'unemployment_rate' => '7',
        'job_satisfaction' =>'Average'
        ]
         );
      
         // Legal 
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

        DB::table('careers')->insert([
        'group_id' => 4,
        'title' => 'Judge',
        'description' => 'Provide judgements after examining the evidence presented by legal teams',
        'avg_sal_jnr' =>'52397',
        'avg_sal_snr' =>'90024',
        'unemployment_rate' => '2',
        'job_satisfaction' =>'Average'
        ]
            );

        // Medical 


        DB::table('careers')->insert([
            'group_id' => 3,
            'title' => 'Doctor',
            'description' => 'Provide medical diagnosis and  care to patients',
            'avg_sal_jnr' =>'152397',
            'avg_sal_snr' =>'300024',
            'unemployment_rate' => '1',
            'job_satisfaction' =>'Low'
            ]
                );
        DB::table('careers')->insert([
            'group_id' => 3,
            'title' => 'Nurse',
            'description' => 'Provide medical diagnosis and  care to patients',
            'avg_sal_jnr' =>'75397',
            'avg_sal_snr' =>'110024',
            'unemployment_rate' => '1',
            'job_satisfaction' =>'Average'
            ]
                );

        // Arts
        DB::table('careers')->insert([
            'group_id' => 6,
            'title' => 'Writer',
            'description' => 'Utilize writting in creating literary works in different genres',
            'avg_sal_jnr' =>'35397',
            'avg_sal_snr' =>'90024',
            'unemployment_rate' => '9',
            'job_satisfaction' =>'Average'
            ]
                );


        DB::table('careers')->insert([
            'group_id' => 6,
            'title' => 'Singer',
            'description' => 'Use of the voice to perform musical renditions to public or digital recordings',
            'avg_sal_jnr' =>'25397',
            'avg_sal_snr' =>'70024',
            'unemployment_rate' => '30',
            'job_satisfaction' =>'Low'
            ]
                );
        
        DB::table('careers')->insert([
            'group_id' => 6,
            'title' => 'Artist',
            'description' => 'Use of the visual medium in demonstrating creative works',
            'avg_sal_jnr' =>'25487',
            'avg_sal_snr' =>'60024',
            'unemployment_rate' => '10',
            'job_satisfaction' =>'Average'
            ]
                );
        
        //Managerial
        DB::table('careers')->insert([
            'group_id' => 8,
            'title' => 'Project Manager',
            'description' => 'Manage the scope, schedule, cost and quality of a project',
            'avg_sal_jnr' =>'75487',
            'avg_sal_snr' =>'140024',
            'unemployment_rate' => '3',
            'job_satisfaction' =>'Average'
            ]
                );
        // Science
        DB::table('careers')->insert([
            'group_id' => 9,
            'title' => 'Scientific Researcher',
            'description' => 'Utilizes scientific method to research specific problems',
            'avg_sal_jnr' =>'76487',
            'avg_sal_snr' =>'90024',
            'unemployment_rate' => '2',
            'job_satisfaction' =>'Average'
            ]
                );


            }
        
}
