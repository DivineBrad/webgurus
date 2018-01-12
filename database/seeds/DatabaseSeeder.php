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
           SlidersTableSeeder::Class,
           CareersGroupTableSeeder::Class,
           CareersTableSeeder::Class,
           CareerIndicatorsTableSeeder::Class,
<<<<<<< HEAD
<<<<<<< HEAD
           TestimonialsTableSeeder::Class,
           AboutTableSeeder::Class,
           FaqTableSeeder::Class,
           PolicyTableSeeder::Class
=======
           TestimonialsTableSeeder::Class
=======
           TestimonialsTableSeeder::Class,
           Newsletter_usersTableSeeder::Class
>>>>>>> 53a70c120cec0c1cbd347d313432733a1d98353d
      
>>>>>>> f9b6431969593fa8faa34c39efcc9ba32c3dc6f2
       ]
       );
    
    
    
    
    }
}
