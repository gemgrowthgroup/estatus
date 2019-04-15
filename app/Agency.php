<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function vehicles(){
    	return $this->belongsToMany('App\Vehicle');
    }
}
