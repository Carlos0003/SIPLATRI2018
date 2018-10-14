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
        'document','fullname', 'email', 'password', 'phonenumber', 'gender', 'role', 'contract', 'municipality_id', 'state', 'cumulativeHour',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //conexión con municipios//
    public function munici(){
        return $this->belongsTo('App\Municipalities','municipality_id');
    }

    //conexión con records para gestor//
    public function records(){
        return $this->hasMany('App\Record', 'user_id');
    }

    //conexión con records//

    public function recordsinstructorLunes1(){
        return $this->hasMany('App\Record', 'instructor_PLunes_id');
    }

    public function recordsinstructorMartes1(){
        return $this->hasMany('App\Record', 'instructor_PMartes_id');
    }

    public function recordsinstructorMiercoles1(){
        return $this->hasMany('App\Record', 'instructor_PMiercoles_id');
    }

    public function recordsinstructorJueves1(){
        return $this->hasMany('App\Record', 'instructor_PJueves_id');
    }

    public function recordsinstructorViernes1(){
        return $this->hasMany('App\Record', 'instructor_PViernes_id');
    }

    public function recordsinstructorSabado1(){
        return $this->hasMany('App\Record', 'instructor_PSabado_id');
    }

    public function recordsinstructorLunes2(){
        return $this->hasMany('App\Record', 'instructor_SLunes_id');
    }

    public function recordsinstructorMartes2(){
        return $this->hasMany('App\Record', 'instructor_SMartes_id');
    }

    public function recordsinstructorMiercoles2(){
        return $this->hasMany('App\Record', 'instructor_SMiercoles_id');
    }

    public function recordsinstructorJueves2(){
        return $this->hasMany('App\Record', 'instructor_SJueves_id');
    }

    public function recordsinstructorViernes2(){
        return $this->hasMany('App\Record', 'instructor_SViernes_id');
    }

    public function recordsinstructorSabado2(){
        return $this->hasMany('App\Record', 'instructor_SSabado_id');
    }

    public function recordsinstructorLunes3(){
        return $this->hasMany('App\Record', 'instructor_TLunes_id');
    }

    public function recordsinstructorMartes3(){
        return $this->hasMany('App\Record', 'instructor_TMartes_id');
    }

    public function recordsinstructorMiercoles3(){
        return $this->hasMany('App\Record', 'instructor_TMiercoles_id');
    }

    public function recordsinstructorJueves3(){
        return $this->hasMany('App\Record', 'instructor_TJueves_id');
    }

    public function recordsinstructorViernes3(){
        return $this->hasMany('App\Record', 'instructor_TViernes_id');
    }

    //buscar
    public function scopeFullname($users,$fullname){
        if(trim($fullname)!= ''){
            $users->where('fullname','LIKE',"%$fullname%");
        }
    }
}
