<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'menu_name1' =>'Home',
            'menu_name2' =>'Insights',
            'menu_name3' =>'Careers',
            'menu_name4' =>'About',
            'menu_sname1' =>'About Us',
            'menu_sname2' =>'Contact',
            'menu_sname3' =>'FAQ',
            'menu_sname4' =>'Privacy Policy',
            'menu_sname5' =>'News',
            'menu_link'=>'',
            'parent_id'=>''
            ]
            );
        
    }
}
