<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
   	protected $table = 'municipalities';
    protected $fillable = [
    	'name', 'zone',
    ];
    //conexión con usuarios//
	public function user(){
        return $this->hasMany('App\User');
    }

    //conexión con records//
	public function recordmunicipality(){
        return $this->hasMany('App\Record');
    }
}