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
    protected $table = 'users';
    protected $fillable = [
        'document','fullname', 'email', 'password', 'phonenumber', 'gender', 'role', 'contract', 'municipality_id', 'state',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function munici(){
        return $this->belongsTo('App\Municipalities','municipality_id');
    }
    public function classrooms(){
        return $this->hasMany('App\Classroom');
    }
    public function records(){
        return $this->hasMany('App\Record');
    }
    //buscar
    public function scopeFullname($users,$fullname){
        if(trim($fullname)!= ''){
            $users->where('fullname','LIKE',"%$fullname%");
        }
    }
}
