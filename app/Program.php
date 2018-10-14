<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable = [
        'name', 'type', 'timeduration',
    ];

//conexión con abilities//
    public function abilities(){
        return $this->hasMany('App\AbilitiesModel');
    }

//conexión con records//
    public function nombreprograma(){
        return $this->hasMany('App\Record', 'program_id');
    }

   //buscar
    public function scopeName($programs,$name){
        if(trim($name)!= ''){
            $programs->where('name','LIKE',"%$name%");
        }
    }
}
