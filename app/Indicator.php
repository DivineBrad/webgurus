<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $primaryKey='indicator_id'; 
    protected $fillable = [
        'indicator','type_id', 'description'
    ];

    public function type(){
        return $this->belongsTo('App\IndicatorType','type_id');
    }
    public function users(){
        return $this->belongsToMany('App\User','user_indicators','indicator_id','user_id');
    }
    public function careers(){
        return $this->belongsToMany('App\Careers','career_indicators','indicator_id','career_id');
    }
}
