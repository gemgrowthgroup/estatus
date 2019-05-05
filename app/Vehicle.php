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

    public function transactions(){
        return $this->belongsTo('App\Transaction');
    }

    public function agency(){
    	return $this->belongsToMany('App\Agency;');
    }

    public function vehicletype(){
        return $this->belongsTo('App\VehicleType');
    }

    public function choose($id){
        return $this->where('vehicle_type_id', $id)->get();
    }

    public function assets(){
        return $this->belongsToMany('App\Asset');
    }
}
