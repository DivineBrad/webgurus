<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    
    protected $primaryKey='about_id'; 
    protected $fillable = [
        'heading1','heading2', 'heading3','para1', 'para2', 'para3', 'para4', 'para5', 'para6', 'para7', 'para8',
        'para9', 'para0'
    ];



}
