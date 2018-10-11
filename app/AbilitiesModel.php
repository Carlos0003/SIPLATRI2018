<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbilitiesModel extends Model
{
    protected $table = 'abilities';
    protected $fillable = [
    	'name', 'program_id', 'durationHour'
    ];

    public function program(){
    	return $this->belongsTo('App\Program');
    }

    public function recordsAbilitiesLunes(){
        return $this->hasMany('App\Record', 'abilities_lunes_id');
    }

    public function recordsAbilitiesMartes(){
        return $this->hasMany('App\Record', 'abilities_martes_id');
    }

    public function recordsAbilitiesMiercoles(){
        return $this->hasMany('App\Record', 'abilities_miercoles_id');
    }

    public function recordsAbilitiesJueves(){
        return $this->hasMany('App\Record', 'abilities_jueves_id');
    }

    public function recordsAbilitiesViernes(){
        return $this->hasMany('App\Record', 'abilities_viernes_id');
    }

    public function recordsAbilitiesSabado(){
        return $this->hasMany('App\Record', 'abilities_sabado_id');
    }

    //buscar
    public function scopeName($abilities,$name){
        if(trim($name)!= ''){
            $abilities->where('name','LIKE',"%$name%");
        }
    }
}