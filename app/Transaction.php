<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $fillable = [
		'reference', 'requested_by', 'user_id', 'client', 'from', 'project', 'origin', 'vehicle_type'
	];

    public function users(){
    	return $this->belongsToMany('App\User');
    }
}
