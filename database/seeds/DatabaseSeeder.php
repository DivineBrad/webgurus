<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
   $this->call(
       [
           TypesTableSeeder::Class,
           IndicatorsTableSeeder::Class,
           CareersGroupTableSeeder::Class,
           CareersTableSeeder::Class,
           CareerIndicatorsTableSeeder::Class,
           TestimonialsTableSeeder::Class,
           AboutTableSeeder::Class,
           FaqTableSeeder::Class,
           PolicyTableSeeder::Class
       ]
       );
    
    
    
    
    }
}
