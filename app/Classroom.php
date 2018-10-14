<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
	protected $table = 'classrooms';
    protected $fillable = [
    	'name', 'user_id', 'state', 'usability'
    ];

    //conexión con usuarios para responsable//
    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    //conexión con records//
    public function recordsLunes1(){
        return $this->hasMany('App\Record', 'classrooms_PLunes_id');
    }

    public function recordsMartes1(){
        return $this->hasMany('App\Record', 'classrooms_PMartes_id');
    }

    public function recordsMiercoles1(){
        return $this->hasMany('App\Record', 'classrooms_PMiercoles_id');
    }

    public function recordsJueves1(){
        return $this->hasMany('App\Record', 'classrooms_PJueves_id');
    }

    public function recordsViernes1(){
        return $this->hasMany('App\Record', 'classrooms_PViernes_id');
    }

    public function recordsSabado1(){
        return $this->hasMany('App\Record', 'classrooms_PSabado_id');
    }

    public function recordsLunes2(){
        return $this->hasMany('App\Record', 'classroom_SLunes_id');
    }

    public function recordsMartes2(){
        return $this->hasMany('App\Record', 'classroom_SMartes_id');
    }

    public function recordsMiercoles2(){
        return $this->hasMany('App\Record', 'classroom_SMiercoles_id');
    }

    public function recordsJueves2(){
        return $this->hasMany('App\Record', 'classroom_SJueves_id');
    }

    public function recordsViernes2(){
        return $this->hasMany('App\Record', 'classroom_SViernes_id');
    }

    public function recordsSabado2(){
        return $this->hasMany('App\Record', 'classroom_SSabado_id');
    }

    public function recordsLunes3(){
        return $this->hasMany('App\Record', 'classroom_TLunes_id');
    }

    public function recordsMartes3(){
        return $this->hasMany('App\Record', 'classroom_TMartes_id');
    }

    public function recordsMiercoles3(){
        return $this->hasMany('App\Record', 'classroom_TMiercoles_id');
    }

    public function recordsJueves3(){
        return $this->hasMany('App\Record', 'classroom_TJueves_id');
    }

    public function recordsViernes3(){
        return $this->hasMany('App\Record', 'classroom_TViernes_id');
    }

    //buscar
    public function scopeName($classrooms,$name){
        if(trim($name)!= ''){
            $classrooms->where('name','LIKE',"%$name%");
        }
    }
}