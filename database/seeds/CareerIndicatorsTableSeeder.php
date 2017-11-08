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

    }
}
