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
    public function records(){
        return $this->hasMany('App\Record', 'user_id');
    }

    public function recordsInstructorLunes(){
        return $this->hasMany('App\Record', 'instructor_lunes_id');
    }

    public function recordsInstructorMartes(){
        return $this->hasMany('App\Record', 'instructor_martes_id');
    }

    public function recordsInstructorMiercoles(){
        return $this->hasMany('App\Record', 'instructor_miercoles_id');
    }

    public function recordsInstructorJueves(){
        return $this->hasMany('App\Record', 'instructor_jueves_id');
    }

    public function recordsInstructorViernes(){
        return $this->hasMany('App\Record', 'instructor_viernes_id');
    }

    public function recordsInstructorSabado(){
        return $this->hasMany('App\Record', 'instructor_sabado_id');
    }

    //buscar
    public function scopeFullname($users,$fullname){
        if(trim($fullname)!= ''){
            $users->where('fullname','LIKE',"%$fullname%");
        }
    }
}
