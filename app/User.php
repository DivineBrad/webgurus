<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey='user_id'; 
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function indicators(){
        return $this->belongsToMany('App\Indicator','user_indicators','user_id','indicator_id');
    }
    public function careers(){
        return $this->belongsToMany('App\Career','user_careers','user_id','career_id');
    }

    public function isAdmin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }
}
