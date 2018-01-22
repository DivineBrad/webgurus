<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{

    protected $table = 'careers';
    
    protected $primaryKey='career_id'; 
    protected $fillable = [
        'title', 'description','avg_sal_jnr','avg_sal_snr','unemployment_rate', 'job_satisfaction','group_id' 
    ];
    public function careerGroup(){
        return $this->belongsTo('App\Post','group_id');
    }
    public function users(){
        return $this->belongsToMany('App\User','user_careers','career_id','user_id');
    }
    public function indicators(){
        return $this->belongsToMany('App\Indicator','career_indicators','career_id','indicator_id');
    }

    

}
