<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function users(){
    	return $this->belongsToMany('App\User');
    }

    public function asset(){
    	return $this->belongsToMany('App\Asset');
    }
}
