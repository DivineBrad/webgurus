<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    
    protected $primaryKey='testimony_id'; 
    protected $fillable = [
        'name','testimony', 'position','company','photo'
    ];



}
