<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ClassroomRequest;

class Classroom extends Model
{
	protected $table = 'classrooms';
    protected $fillable = [
    	'name', 'user_id', 'state', 'usability'
    ];


    public function user(){
    	return $this->belongsTo('App\User');
    }

    //buscar
    public function scopeFullname($classroom,$name){
        if(trim($name)!= ''){
            $classroom->where('name','LIKE',"%$name%");
        }
    }
}
