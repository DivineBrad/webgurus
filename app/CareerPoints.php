<?php

namespace App;



class CareerPoints 
{
   public $career_id;
   public $career;
   public $description;
   public $total_points=0; 
   public function __construct($id,$title,$desc,$points){
    $this->career_id=$id;
    $this->career=$title;
    $this->description=$desc;
    $this->total_points+=$points;
  
   }
   public function add_points($points){
   $this->total_points+=$points;
   }
  
  
}
