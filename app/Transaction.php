<?php

namespace App;

use Auth;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model implements Searchable
{
	protected $table = 'transactions';
 
    protected $fillable = [
		'reference', 'requested_by', 'user_id', 'client', 'from', 'project', 'origin', 'vehicle_type_id'
	];
 
    public function getSearchResult(): SearchResult
    {
    	$role = strtolower(implode(', ', Auth::user()->roles()->pluck('name')->toArray()));
        $url = route($role.'.transactions.show', $this->id);
 
        return new SearchResult(
            $this,
            $this->client,
            $url
        );
    }

    public function users(){
    	return $this->belongsToMany('App\User');
    }

    public function status(){
        return $this->belongsToMany('App\Status');
    }

    public function agency(){
        return $this->belongsTo('App\Agency');
    }

    public function vehicle(){
        return $this->hasMany('App\Vehicle');
    }
}
