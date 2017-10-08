<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndicatorType extends Model
{
    protected $primaryKey='type_id'; 
    protected $fillable = [
        'type', 
    ];
    public function indicators(){
        return $this->hasMany('App\Indicator','type_id');
    }

}
