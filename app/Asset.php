<?php

namespace App;

use Auth;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model implements Searchable
{
	protected $table = 'assets';
 
    protected $fillable = [
		'name', 'identifier', 'vehicle_id'
	];
 
    public function getSearchResult(): SearchResult
    {
    	$role = strtolower(implode(', ', Auth::user()->roles()->pluck('name')->toArray()));
        $url = route($role.'.assets.show', $this->id);
 
        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }

    public function vehicle(){
    	return $this->belongsToMany('App\Vehicle');
    }
}
