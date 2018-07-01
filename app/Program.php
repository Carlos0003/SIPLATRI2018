<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable = [
    	'name',
    ];
    public function records(){
        return $this->hasMany('App\Record');
    }

   //buscar
    public function scopeName($programs,$name){
        if(trim($name)!= ''){
            $programs->where('name','LIKE',"%$name%");
        }
    }
}
