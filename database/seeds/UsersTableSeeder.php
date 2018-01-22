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
            'user_id' => 1,
            'name' => 'user',
            'email' => 'userGuest@gmail.com',
            'password' => bcrypt('secret'),
            'admin' => '0',
        ]);

        DB::table('users')->insert([
            'user_id' => 2,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'admin' => '1',
        ]);
    }
}
