<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    
    protected $primaryKey='policy_id'; 
    protected $fillable = [
        'topic1','text1'
    ];



}
