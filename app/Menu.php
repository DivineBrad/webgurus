<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey='menu_id'; 
    protected $fillable = [
        'menu_name','menu_link','parent_id'
    ];

}
