<?php

namespace App\Http\Controllers\Agent;

use App\Vehicle;
use App\Agency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
	public function index(){
		return redirect('/agent');
	}

    public function search(Request $request)
    {
 
        $searchterm = $request->input('query');
 
        $searchResults = (new Search())
                    ->registerModel(Vehicle::class, 'name', 'description')
                    ->perform($request->input('query'));
 
        return view('agent.search', compact('searchResults', 'searchterm'));
    }
}
