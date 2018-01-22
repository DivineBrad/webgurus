<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsFeed extends Model
{
    protected $table= 'NewsFeed';
    protected $primaryKey='news_id'; 
    protected $fillable = [
        'title', 'date','info',
    ];
}
