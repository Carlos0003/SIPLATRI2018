<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
   	protected $table = 'municipalities';
    protected $fillable = [
    	'name', 'zone',
    ];
public function user(){
        return $this->hasMany('App\User');
    }
}