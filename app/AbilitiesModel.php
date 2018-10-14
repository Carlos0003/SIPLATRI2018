<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbilitiesModel extends Model
{
    protected $table = 'abilities';
    protected $fillable = [
    	'name', 'program_id', 'durationHour'
    ];

//conexión con programs//
    public function program(){
    	return $this->belongsTo('App\Program');
    }

//conexión con records//
    public function recordsLunes1(){
        return $this->hasMany('App\Record', 'abilities_PLunes_id');
    }

    public function recordsMartes1(){
        return $this->hasMany('App\Record', 'abilities_PMartes_id');
    }

    public function recordsMiercoles1(){
        return $this->hasMany('App\Record', 'abilities_PMiercoles_id');
    }

    public function recordsJueves1(){
        return $this->hasMany('App\Record', 'abilities_PJueves_id');
    }

    public function recordsViernes1(){
        return $this->hasMany('App\Record', 'abilities_PViernes_id');
    }

    public function recordsSabado1(){
        return $this->hasMany('App\Record', 'abilities_PSabado_id');
    }

    public function recordsLunes2(){
        return $this->hasMany('App\Record', 'abilities_SLunes_id');
    }

    public function recordsMartes2(){
        return $this->hasMany('App\Record', 'abilities_SMartes_id');
    }

    public function recordsMiercoles2(){
        return $this->hasMany('App\Record', 'abilities_SMiercoles_id');
    }

    public function recordsJueves2(){
        return $this->hasMany('App\Record', 'abilities_SJueves_id');
    }

    public function recordsViernes2(){
        return $this->hasMany('App\Record', 'abilities_SViernes_id');
    }

    public function recordsSabado2(){
        return $this->hasMany('App\Record', 'abilities_SSabado_id');
    }

    public function recordsLunes3(){
        return $this->hasMany('App\Record', 'abilities_TLunes_id');
    }

    public function recordsMartes3(){
        return $this->hasMany('App\Record', 'abilities_TMartes_id');
    }

    public function recordsMiercoles3(){
        return $this->hasMany('App\Record', 'abilities_TMiercoles_id');
    }

    public function recordsJueves3(){
        return $this->hasMany('App\Record', 'abilities_TJueves_id');
    }

    public function recordsViernes3(){
        return $this->hasMany('App\Record', 'abilities_TViernes_id');
    }

    //buscar
    public function scopeName($abilities,$name){
        if(trim($name)!= ''){
            $abilities->where('name','LIKE',"%$name%");
        }
    }
}