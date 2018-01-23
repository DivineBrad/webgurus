<?php

use Illuminate\Database\Seeder;

class CareerIndicatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Software Developer
        DB::table('career_indicators')->insert([
            'career_id' => 1,
            'indicator_id' => 1,
           
        ]
        );
        DB::table('career_indicators')->insert([
            'career_id' => 1,
            'indicator_id' => 2,
        
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 1,
        'indicator_id' => 8,
    
    ]
    );
    // Teacher 
    DB::table('career_indicators')->insert([
        'career_id' => 2,
        'indicator_id' => 4,
    
    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 2,
        'indicator_id' => 5,
    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 2,
        'indicator_id' => 6,
    
    ]
    );
    //Trial Lawyer 
    DB::table('career_indicators')->insert([
        'career_id' => 3,
        'indicator_id' => 1,
    
    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 3,
        'indicator_id' => 4,
    
    ]
    );
   
    DB::table('career_indicators')->insert([
        'career_id' => 3,
        'indicator_id' => 8,
    
    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 3,
        'indicator_id' => 10,
    
    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 3,
        'indicator_id' => 12,
    
    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 3,
        'indicator_id' => 24,
    
    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 3,
        'indicator_id' => 28,
    
    ]
    );
//  judge

    DB::table('career_indicators')->insert([
    'career_id' => 4,
    'indicator_id' => 27,

    ]
    );
    DB::table('career_indicators')->insert([
        'career_id' => 4,
        'indicator_id' => 1,
    
        ]
        );

    DB::table('career_indicators')->insert([
        'career_id' => 4,
        'indicator_id' => 4,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 4,
        'indicator_id' => 8 ,
    
        ]
        );
        
    DB::table('career_indicators')->insert([
        'career_id' => 4,
        'indicator_id' => 28,
    
        ]
        );
    //Doctor
    DB::table('career_indicators')->insert([
        'career_id' => 5,
        'indicator_id' => 14,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 5,
        'indicator_id' => 16,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 5,
        'indicator_id' => 1,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 5,
        'indicator_id' => 8,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 5,
        'indicator_id' => 27,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 5,
        'indicator_id' => 28,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 5,
        'indicator_id' => 29,
    
        ]
        );
    // nurse 

    DB::table('career_indicators')->insert([
        'career_id' => 6,
        'indicator_id' => 2,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 6,
        'indicator_id' => 14,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 6,
        'indicator_id' => 27,
    
        ]
        );
    DB::table('career_indicators')->insert([
        'career_id' => 6,
        'indicator_id' => 29,
    
        ]
        );
        //Writer
        DB::table('career_indicators')->insert([
            'career_id' => 7,
            'indicator_id' => 33,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 7,
            'indicator_id' => 30,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 7,
            'indicator_id' => 23,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 7,
            'indicator_id' => 18,
        
            ]
            );
        //Project Manager
        DB::table('career_indicators')->insert([
            'career_id' => 10,
            'indicator_id' => 28,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 10,
            'indicator_id' => 27,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 10,
            'indicator_id' => 26,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 10,
            'indicator_id' => 24,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 10,
            'indicator_id' => 20,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 10,
            'indicator_id' => 1,
        
            ]
            );
        // Artist
        DB::table('career_indicators')->insert([
            'career_id' => 9,
            'indicator_id' => 13,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 9,
            'indicator_id' => 17,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 9,
            'indicator_id' => 23,
        
            ]
            );
        DB::table('career_indicators')->insert([
            'career_id' => 9,
            'indicator_id' => 30,
        
            ]
            );
        
        
    
        

    }
}
