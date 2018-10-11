<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
	protected $table = 'classrooms';
    protected $fillable = [
    	'name', 'user_id', 'state', 'usability'
    ];


    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function recordsClassroomLunes(){
        return $this->hasMany('App\Record', 'classrooms_lunes_id');
    }

    public function recordsClassroomMartes(){
        return $this->hasMany('App\Record', 'classrooms_martes_id');
    }

    public function recordsClassroomMiercoles(){
        return $this->hasMany('App\Record', 'classrooms_miercoles_id');
    }

    public function recordsClassroomJueves(){
        return $this->hasMany('App\Record', 'classrooms_jueves_id');
    }

    public function recordsClassroomViernes(){
        return $this->hasMany('App\Record', 'classrooms_viernes_id');
    }

    public function recordsClassroomSabado(){
        return $this->hasMany('App\Record', 'classrooms_sabado_id');
    }

    //buscar
    public function scopeName($classrooms,$name){
        if(trim($name)!= ''){
            $classrooms->where('name','LIKE',"%$name%");
        }
    }
}