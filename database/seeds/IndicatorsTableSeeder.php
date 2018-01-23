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
        //1
        DB::table('indicators')->insert([
            'indicator' => 'logical',
            'description' =>'Thinking in a very rational and step by step manner',
            'type_id' => 2,
        ]
       );
       //2
       DB::table('indicators')->insert([
        'indicator' => 'patient',
        'description' =>'The ability to remain calm and focus whilst waiting for the desired outcome',
        'type_id' => 2,
        ]
        );
        //3
        DB::table('indicators')->insert([
            'indicator' => 'empathetic',
            'description' =>'trying to understand another person from their perspective and experience',
            'type_id' => 2,
            ]
            );
            //4
        DB::table('indicators')->insert([
            'indicator' => 'public speaking',
            'description' =>'Training in speaking to a group of people about a subject matter',
            'type_id' => 1,
            ]
            );
        //5
        DB::table('indicators')->insert([
            'indicator' => 'extrovert',
            'description' =>'Likes going out and meeting and speaking to people',
            'type_id' => 2,
            ]
            );  
            //6 
        DB::table('indicators')->insert([
            'indicator' => 'introvert',
            'description' =>'Prefers doing activities alone, not very outgoing',
            'type_id' => 2,
            ]
            ); 
            //7  
        DB::table('indicators')->insert([
            'indicator' => 'teaching',
            'description' =>'Likes explaining concepts to other persons',
            'type_id' => 2,
            ]
            ); 
            //8 
        DB::table('indicators')->insert([
            'indicator' => 'problem solving',
            'description' =>'Likes understanding a problem and developing solutions',
            'type_id' => 2,
            ]
            ); 
            //9 
        DB::table('indicators')->insert([
            'indicator' => 'teaching',
            'description' =>'Loves explaining and teaching others about a topic',
            'type_id' => 3,
            ]
            ); 
            //10
            
          DB::table('indicators')->insert([
            'indicator' => 'debate',
            'description' =>'Loves to logically present an argument and support it with facts',
            'type_id' => 3,
            ]
            );
            //11
        DB::table('indicators')->insert([
            'indicator' => 'programming course',
            'description' =>'Trained in writting code in programing language',
            'type_id' => 1,
            ]
            );  
            //12 
        DB::table('indicators')->insert([
            'indicator' => 'rhetoric',
            'description' =>'training in the art of effective or persuasive speaking or writing ',
            'type_id' => 1,
            ]
            ); 
            //13
        DB::table('indicators')->insert([
            'indicator' => 'visual art',
            'description' =>'training in the displaying visual creative depictions ',
            'type_id' => 1,
            ]
            ); 
            //14
        DB::table('indicators')->insert([
            'indicator' => 'biology',
            'description' =>'training in understanding the systems of the body ',
            'type_id' => 1,
            ]
            ); 
            //15
        DB::table('indicators')->insert([
            'indicator' => 'physics',
            'description' =>'training in understanding the forces of the universe ',
            'type_id' => 1,
            ]
            ); 
            //16
        DB::table('indicators')->insert([
            'indicator' => 'mathematics',
            'description' =>'training in mathematical concepts',
            'type_id' => 1,
            ]
            ); 
            //17
        DB::table('indicators')->insert([
            'indicator' => 'artistic painting',
            'description' =>'use of painting  materials to display creative art',
            'type_id' => 1,
            ]
            );
            //18
        DB::table('indicators')->insert([
            'indicator' => 'literature',
            'description' =>'study of written works',
            'type_id' => 1,
            ]
            );
        //19
        DB::table('indicators')->insert([
            'indicator' => 'history',
            'description' =>'study of past events and societies',
            'type_id' => 1,
            ]
            );
        //20
        DB::table('indicators')->insert([
            'indicator' => 'project management',
            'description' =>'study of managing projects',
            'type_id' => 1,
            ]
            );
            //21
        DB::table('indicators')->insert([
            'indicator' => 'sports',
            'description' =>'training or ability in a sporting discipline',
            'type_id' => 1,
            ]
            );
            //22
        DB::table('indicators')->insert([
            'indicator' => 'accounting',
            'description' =>'study of accounting principles',
            'type_id' => 1,
            ]
            );
            //23
        DB::table('indicators')->insert([
            'indicator' => 'spontaneous',
            'description' =>'result of a sudden inner impulse or inclination and without premeditation or external stimulus',
            'type_id' => 2,
            ]
            );
            //24
        DB::table('indicators')->insert([
            'indicator' => 'planning',
            'description' =>'the process of making plans for something',
            'type_id' => 2,
            ]
            );
            //25
        DB::table('indicators')->insert([
            'indicator' => 'organizing',
            'description' =>'the action of organizing something',
            'type_id' => 2,
            ]
            );
            //26
        DB::table('indicators')->insert([
            'indicator' => 'leading',
            'description' =>'demonstrating intiative in guiding others',
            'type_id' => 2,
            ]
            );
            //27
        DB::table('indicators')->insert([
            'indicator' => 'disciplined',
            'description' =>'ability to maintain a consistent set of actions towards a specific goal',
            'type_id' => 2,
            ]
            );
            //28
        DB::table('indicators')->insert([
            'indicator' => 'critical thinking',
            'description' =>'ability to analyze an concept in a logical way',
            'type_id' => 2,
            ]
            );
        //29
        DB::table('indicators')->insert([
            'indicator' => 'helping others',
            'description' =>'having a desire to help people through service to them',
            'type_id' => 2,
            ]
            );
        //30
        DB::table('indicators')->insert([
            'indicator' => 'creative',
            'description' =>'ability to produce unique expressions of ideas',
            'type_id' => 2,
            ]
            );
        //31
        DB::table('indicators')->insert([
            'indicator' => 'active listening',
            'description' =>'someone who listens intently to others and seek to understand and emphathize with them',
            'type_id' => 2,
            ]
            );
        //32
        DB::table('indicators')->insert([
            'indicator' => 'performing for audiences',
            'description' =>'passionate about performing in front of audiences',
            'type_id' => 3,
            ]
            );
        //33
        DB::table('indicators')->insert([
            'indicator' => 'writting',
            'description' =>'passionate about writting materials for several or specific genres',
            'type_id' => 3,
            ]
            );
                    
                  
    }

}
