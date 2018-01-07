<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey='slider_id'; 
    protected $fillable = [
        'slider_name','slider_img','slider_header', 'description'
    ];

}
