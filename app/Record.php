<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    protected $fillable = [
    	   'number', 'program_id', 'modalidad', 'trimestreActual', 'fecha_inicio', 'fecha_fin', 'horasProgramadas', 'user_id', 'municipality_id', 'hora_inicio_PLunes', 'hora_fin_PLunes', 'hora_inicio_PMartes', 'hora_fin_PMartes', 'hora_inicio_PMiercoles', 'hora_fin_PMiercoles', 'hora_inicio_PJueves', 'hora_fin_PJueves', 'hora_inicio_PViernes', 'hora_fin_PViernes', 'hora_inicio_PSabado', 'hora_fin_PSabado', 'hora_inicio_SLunes', 'hora_fin_SLunes', 'hora_inicio_SMartes', 'hora_fin_SMartes', 'hora_inicio_SMiercoles', 'hora_fin_SMiercoles', 'hora_inicio_SJueves', 'hora_fin_SJueves', 'hora_inicio_SViernes', 'hora_fin_SViernes', 'hora_inicio_SSabado', 'hora_fin_SSabado', 'hora_inicio_TLunes', 'hora_fin_TLunes', 'hora_inicio_TMartes', 'hora_fin_TMartes', 'hora_inicio_TMiercoles', 'hora_fin_TMiercoles', 'hora_inicio_TJueves', 'hora_fin_TJueves', 'hora_inicio_TViernes', 'hora_fin_TViernes', 'abilities_PLunes_id', 'abilities_PMartes_id', 'abilities_PMiercoles_id', 'abilities_PJueves_id', 'abilities_PViernes_id', 'abilities_PSabado_id', 'abilities_SLunes_id', 'abilities_SMartes_id', 'abilities_SMiercoles_id', 'abilities_SJueves_id', 'abilities_SViernes_id', 'abilities_SSabado_id', 'abilities_TLunes_id', 'abilities_TMartes_id', 'abilities_TMiercoles_id', 'abilities_TJueves_id', 'abilities_TViernes_id', 'classrooms_PLunes_id', 'classrooms_PMartes_id', 'classrooms_PMiercoles_id', 'classrooms_PJueves_id', 'classrooms_PViernes_id', 'classrooms_PSabado_id', 'classroom_SLunes_id', 'classroom_SMartes_id', 'classroom_SMiercoles_id', 'classroom_SJueves_id', 'classroom_SViernes_id', 'classroom_SSabado_id', 'classroom_TLunes_id', 'classroom_TMartes_id', 'classroom_TMiercoles_id', 'classroom_TJueves_id', 'classroom_TViernes_id', 'instructor_PLunes_id', 'instructor_PMartes_id', 'instructor_PMiercoles_id', 'instructor_PJueves_id', 'instructor_PViernes_id', 'instructor_PSabado_id', 'instructor_SLunes_id', 'instructor_SMartes_id', 'instructor_SMiercoles_id', 'instructor_SJueves_id', 'instructor_SViernes_id', 'instructor_SSabado_id', 'instructor_TLunes_id', 'instructor_TMartes_id', 'instructor_TMiercoles_id', 'instructor_TJueves_id', 'instructor_TViernes_id',
    ];

//conexión con usuarios para nombrar gestor//
    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

//conexión con programas para nombrar ficha//
	public function nameprogram(){
    	return $this->belongsTo('App\Program', 'program_id');
    }

//conexión con municipios//
    public function municipios(){
        return $this->belongsTo('App\Municipalities', 'municipality_id');
    }

//conexión con classroom//
    public function classroomLunes1(){
        return $this->belongsTo('App\Classroom', 'classrooms_PLunes_id');
    }

    public function classroomMartes1(){
        return $this->belongsTo('App\Classroom', 'classrooms_PMartes_id');
    }

    public function classroomMiercoles1(){
        return $this->belongsTo('App\Classroom', 'classrooms_PMiercoles_id');
    }

    public function classroomJueves1(){
        return $this->belongsTo('App\Classroom', 'classrooms_PJueves_id');
    }

    public function classroomViernes1(){
        return $this->belongsTo('App\Classroom', 'classrooms_PViernes_id');
    }

    public function classroomSabado1(){
        return $this->belongsTo('App\Classroom', 'classroom_PSabado_id');
    }

    public function classroomLunes2(){
        return $this->belongsTo('App\Classroom', 'classroom_SLunes_id');
    }

    public function classroomMartes2(){
        return $this->belongsTo('App\Classroom', 'classroom_SMartes_id');
    }

    public function classroomMiercoles2(){
        return $this->belongsTo('App\Classroom', 'classroom_SMiercoles_id');
    }

    public function classroomJueves2(){
        return $this->belongsTo('App\Classroom', 'classroom_SJueves_id');
    }

    public function classroomViernes2(){
        return $this->belongsTo('App\Classroom', 'classroom_SViernes_id');
    }

    public function classroomSabado2(){
        return $this->belongsTo('App\Classroom', 'classroom_SSabado_id');
    }

    public function classroomLunes3(){
        return $this->belongsTo('App\Classroom', 'classroom_TLunes_id');
    }

    public function classroomMartes3(){
        return $this->belongsTo('App\Classroom', 'classroom_TMartes_id');
    }

    public function classroomMiercoles3(){
        return $this->belongsTo('App\Classroom', 'classroom_TMiercoles_id');
    }

    public function classroomJueves3(){
        return $this->belongsTo('App\Classroom', 'classroom_TJueves_id');
    }

    public function classroomViernes3(){
        return $this->belongsTo('App\Classroom', 'classroom_TViernes_id');
    }

//conexión con abilities//
    public function abilitiesLunes1(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_PLunes_id');
    }

    public function abilitiesMartes1(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_PMartes_id');
    }

    public function abilitiesMiercoles1(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_PMiercoles_id');
    }

    public function abilitiesJueves1(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_PJueves_id');
    }

    public function abilitiesViernes1(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_PViernes_id');
    }

    public function abilitiesSabado1(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_PSabado_id');
    }

    public function abilitiesLunes2(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_SLunes_id');
    }

    public function abilitiesMartes2(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_SMartes_id');
    }

    public function abilitiesMiercoles2(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_SMiercoles_id');
    }

    public function abilitiesJueves2(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_SJueves_id');
    }

    public function abilitiesViernes2(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_SViernes_id');
    }

    public function abilitiesSabado2(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_SSabado_id');
    }

    public function abilitiesLunes3(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_TLunes_id');
    }

    public function abilitiesMartes3(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_TMartes_id');
    }

    public function abilitiesMiercoles3(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_TMiercoles_id');
    }

    public function abilitiesJueves3(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_TJueves_id');
    }

    public function abilitiesViernes3(){
        return $this->belongsTo('App\AbilitiesModel', 'abilities_TViernes_id');
    }

//conexión con users//
    public function instructorLunes1(){
        return $this->belongsTo('App\User', 'instructor_PLunes_id');
    }

    public function instructorMartes1(){
        return $this->belongsTo('App\User', 'instructor_PMartes_id');
    }

    public function instructorMiercoles1(){
        return $this->belongsTo('App\User', 'instructor_PMiercoles_id');
    }

    public function instructorJueves1(){
        return $this->belongsTo('App\User', 'instructor_PJueves_id');
    }

    public function instructorViernes1(){
        return $this->belongsTo('App\User', 'instructor_PViernes_id');
    }

    public function instructorSabado1(){
        return $this->belongsTo('App\User', 'instructor_PSabado_id');
    }

    public function instructorLunes2(){
        return $this->belongsTo('App\User', 'instructor_SLunes_id');
    }

    public function instructorMartes2(){
        return $this->belongsTo('App\User', 'instructor_SMartes_id');
    }

    public function instructorMiercoles2(){
        return $this->belongsTo('App\User', 'instructor_SMiercoles_id');
    }

    public function instructorJueves2(){
        return $this->belongsTo('App\User', 'instructor_SJueves_id');
    }

    public function instructorViernes2(){
        return $this->belongsTo('App\User', 'instructor_SViernes_id');
    }

    public function instructorSabado2(){
        return $this->belongsTo('App\User', 'instructor_SSabado_id');
    }

    public function instructorLunes3(){
        return $this->belongsTo('App\User', 'instructor_TLunes_id');
    }

    public function instructorMartes3(){
        return $this->belongsTo('App\User', 'instructor_TMartes_id');
    }

    public function instructorMiercoles3(){
        return $this->belongsTo('App\User', 'instructor_TMiercoles_id');
    }

    public function instructorJueves3(){
        return $this->belongsTo('App\User', 'instructor_TJueves_id');
    }

    public function instructorViernes3(){
        return $this->belongsTo('App\User', 'instructor_TViernes_id');
    }


   //buscar
    public function scopeName($record,$name){
        if(trim($name)!= ''){
            $record->where('name','LIKE',"%$name%");
        }
    }
}
