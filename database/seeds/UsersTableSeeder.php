<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Bob',
            'lname' =>'Johnson',
            'email' => 'bob@gmail.com',
            'password' => 'pass'
            ]
            ); 
    }
}
