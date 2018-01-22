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
           AboutTableSeeder::Class,
           FaqTableSeeder::Class,
           PolicyTableSeeder::Class,
           Newsletter_usersTableSeeder::Class,
           TestimonialsTableSeeder::Class,
           NewslettersTableSeeder::Class,    
           SlidersTableSeeder::Class,
           NewsFeedTableSeeder::Class,
           UsersTableSeeder::Class,
           AdminUsersTableSeeder::Class,
           MenuTableSeeder::Class,
           NewsFeedTableSeeder::Class,

       ]
       );
    
    
    
    
    }
}
