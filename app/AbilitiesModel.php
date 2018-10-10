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
    public function records(){
        return $this->hasMany('App\Record');
    }

    //buscar
    public function scopeName($abilities,$name){
        if(trim($name)!= ''){
            $abilities->where('name','LIKE',"%$name%");
        }
    }
}