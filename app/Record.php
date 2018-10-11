<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    protected $fillable = [
    	'number', 'trimestreActual', 'horasProgramadas', 'fecha_inicio', 'fecha_fin', 'hora_inicio', 'hora_fin', 'program_id', 'user_id', 'municipality_id', 'abilities_lunes_id','classrooms_lunes_id', 'abilities_martes_id', 'classrooms_martes_id', 'abilities_miercoles_id', 'classrooms_miercoles_id', 'abilities_jueves_id', 'classrooms_jueves_id', 'abilities_viernes_id', 'classrooms_viernes_id', 'abilities_sabado_id', 'classrooms_sabado_id', 'instructor_lunes_id', 'instructor_martes_id', 'instructor_miercoles_id', 'instructor_jueves_id', 'instructor_viernes_id', 'instructor_sabado_id',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
	public function program(){
    	return $this->belongsTo('App\Program', 'program_id');
    }
    public function classroom(){
    	return $this->belongsTo('App\Classroom', 'classroom_id');
    }

    public function classroomLunes(){
        return $this->belongsTo('App\Classroom', 'classrooms_lunes_id');
    }

    public function classroomMartes(){
        return $this->belongsTo('App\Classroom', 'classrooms_martes_id');
    }

    public function classroomMiercoles(){
        return $this->belongsTo('App\Classroom', 'classrooms_miercoles_id');
    }

    public function classroomJueves(){
        return $this->belongsTo('App\Classroom', 'classrooms_jueves_id');
    }

    public function classroomViernes(){
        return $this->belongsTo('App\Classroom', 'classrooms_viernes_id');
    }

    public function classroomSabado(){
        return $this->belongsTo('App\Classroom', 'classrooms_sabado_id');
    }

    public function abilitiesLunes(){
        return $this->belongsTo('App\Abilities', 'abilities_lunes_id');
    }

    public function abilitiesMartes(){
        return $this->belongsTo('App\Abilities', 'abilities_martes_id');
    }

    public function abilitiesMiercoles(){
        return $this->belongsTo('App\Abilities', 'abilities_miercoles_id');
    }

    public function abilitiesJueves(){
        return $this->belongsTo('App\Abilities', 'abilities_jueves_id');
    }

    public function abilitiesViernes(){
        return $this->belongsTo('App\Abilities', 'abilities_viernes_id');
    }

    public function abilitiesSabado(){
        return $this->belongsTo('App\Abilities', 'abilities_sabado_id');
    }

    public function instructorLunes(){
        return $this->belongsTo('App\User', 'instructor_lunes_id');
    }

    public function instructorMartes(){
        return $this->belongsTo('App\User', 'instructor_martes_id');
    }

    public function instructorMiercoles(){
        return $this->belongsTo('App\User', 'instructor_miercoles_id');
    }

    public function instructorJueves(){
        return $this->belongsTo('App\User', 'instructor_jueves_id');
    }

    public function instructorViernes(){
        return $this->belongsTo('App\User', 'instructor_viernes_id');
    }

    public function instructorSabado(){
        return $this->belongsTo('App\User', 'instructor_sabado_id');
    }


   //buscar
    public function scopeName($record,$name){
        if(trim($name)!= ''){
            $record->where('name','LIKE',"%$name%");
        }
    }
}
