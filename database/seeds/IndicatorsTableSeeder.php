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
            'type_id' => 2,
        ]
       );
       DB::table('indicators')->insert([
        'indicator' => 'patient',
        'type_id' => 2,
        ]
        );
        DB::table('indicators')->insert([
            'indicator' => 'spontaneous',
            'type_id' => 2,
            ]
            );
    }
}
