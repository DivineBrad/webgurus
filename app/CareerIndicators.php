<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerIndicators extends Model
{
    protected $table = 'careerIndicators';

    protected $primaryKey=['career_id','indicator_id']; 
    protected $fillable = [
        'created_at', 'updated_at', 
    ];

    public function careers(){
        return $this->hasMany ('App\Career','career_id');
        
    }
   
}
