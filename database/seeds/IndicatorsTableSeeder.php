<?php

use Illuminate\Database\Seeder;

class IndicatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indicators')->insert([
            'indicator' => 'logical',
            'description' =>'Thinking in a very rational and step by step manner',
            'type_id' => 2,
        ]
       );
       DB::table('indicators')->insert([
        'indicator' => 'patient',
        'description' =>'The ability to remain calm and focus whilst waiting for the desired outcome',
        'type_id' => 2,
        ]
        );
        DB::table('indicators')->insert([
            'indicator' => 'spontaneous',
            'description' =>'Thinking or acting suddenly out of emotions or sudden inspiration',
            'type_id' => 2,
            ]
            );
        DB::table('indicators')->insert([
            'indicator' => 'public speaking',
            'description' =>'Training in speaking to a group of people about a subject matter',
            'type_id' => 1,
            ]
            );
            DB::table('indicators')->insert([
                'indicator' => 'extrovert',
                'description' =>'Likes going out and meeting and speaking to people',
                'type_id' => 2,
                ]
                );   
            DB::table('indicators')->insert([
                'indicator' => 'introvert',
                'description' =>'Prefers doing activities alone, not very outgoing',
                'type_id' => 2,
                ]
                );   
            DB::table('indicators')->insert([
                'indicator' => 'teaching',
                'description' =>'Likes explaining concepts to other persons',
                'type_id' => 2,
                ]
                );  
            DB::table('indicators')->insert([
                'indicator' => 'problem solving',
                'description' =>'Likes understanding a problem and developing solutions',
                'type_id' => 2,
                ]
                );     
                  
    }

}
