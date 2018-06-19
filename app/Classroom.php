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
}
