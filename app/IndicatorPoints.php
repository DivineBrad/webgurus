<?php

namespace App;



class IndicatorPoints 
{
   public $indicator_id;
   public $indicator;
   public $points; 
   public function __construct($indicator, $points){
    $this->indicator=$indicator;
    $this->points=$points;
   }
  
  
}
