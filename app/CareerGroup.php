<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerGroup extends Model
{
    protected $primaryKey='group_id'; 
    protected $fillable = [
        'group_title', 'description', 
    ];

    public function career(){
        return $this->hasMany ('App\Career','career_id');
        
    }
   
}
