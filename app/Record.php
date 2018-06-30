<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    protected $fillable = [
    	'id', 'idrecord', 'program_id', 'totalquarter', 'currentquarter', 'programtype', 'startdate', 'endingdate', 'scheduledhours', 'user_id', 'municipality', 'starttime', 'endtime', 'matter', 'classroom_id', 'groupmanager'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function classroom(){
    	return $this->belongsTo('App\Classroom');
    }

   //buscar
    public function scopeName($record,$name){
        if(trim($name)!= ''){
            $record->where('name','LIKE',"%$name%");
        }
    }
}
