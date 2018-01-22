<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    
    protected $primaryKey='faq_id'; 
    protected $fillable = [
        'text1','text2', 'text3', 'text4', 'q1', 'q2', 'q3', 'q4', 'q5', 'ans1', 'ans2', 'ans2_1', 'ans3', 'ans3_1', 'ans4',
        'ans4_1', 'ans5'
    ];



}
