<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function agency(){
    	return $this->belongsToMany('App\Agency;');
    }
}
