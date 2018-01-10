<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter_users extends Model
{
    //
    protected $table = "newsletter_users";
    protected $fillable = ['email','user_id'];
}
