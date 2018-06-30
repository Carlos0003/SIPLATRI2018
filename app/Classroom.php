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
    	return $this->belongsTo('App\User');
    }

    //buscar
    public function scopeName($classrooms,$name){
        if(trim($name)!= ''){
            $classrooms->where('name','LIKE',"%$name%");
        }
    }
    // public function ajaxsearch(Request $request){
    //     $classrooms = Classroom::name($request->input('name'))->orderBy('id', 'ASC')->paginate(10)->setPath('classroom');
    //     return view('classroom.ajaxs')->with('classroom',$classrooms);
    // }
}
