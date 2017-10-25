<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indicator_types')->insert([
            'type' => "skill"
        ]
       );
       DB::table('indicator_types')->insert([
            'type' => "trait"
            ]
        );
        DB::table('indicator_types')->insert([
            'type' => "passion"
        ]
        );
    }
}
