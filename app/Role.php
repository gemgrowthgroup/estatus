<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $guarded = [];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function profiles(){
    	return $this->hasManyThrough('App\Profile', 'App\User');
    }
}
