<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable = [
        'name', 'type', 'timeduration',
    ];
    public function records(){
        return $this->hasMany('App\Record');
    }
    public function abilities(){
        return $this->hasMany('App\AbilitiesModel');
    }
   //buscar
    public function scopeName($programs,$name){
        if(trim($name)!= ''){
            $programs->where('name','LIKE',"%$name%");
        }
    }
}
