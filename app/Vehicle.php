<?php

namespace App;

use Auth;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model implements Searchable
{
	protected $table = 'vehicles';
 
    protected $fillable = ['name', 'description', 'vehicle_type_id'];
 
    public function getSearchResult(): SearchResult
    {
    	$role = strtolower(implode(', ', Auth::user()->roles()->pluck('name')->toArray()));
        $url = route($role.'.vehicles.show', $this->id);
 
        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }

    public function agency(){
    	return $this->belongsToMany('App\Agency;');
    }

    public function type(){
        return $this->belongsToMany('App\VehicleType');
    }
}
