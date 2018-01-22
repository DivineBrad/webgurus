<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey='menu_id'; 
    protected $fillable = [
        'menu_name1','menu_name2','menu_name3','menu_name4','menu_sname1','menu_sname2','menu_sname3',
        'menu_sname4','menu_sname5','menu_link','parent_id'
    ];

}
