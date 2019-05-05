<?php

namespace App\Http\Controllers\Agent;

use App\Vehicle;
use App\Agency;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
	public function index(){
		return redirect('agent.index');
	}

    public function search(Request $request)
    {
        $searchterm = $request->input('query');
 
        $searchResults = (new Search())
                    ->registerModel(Vehicle::class, 'name', 'description')
                    ->registerModel(Transaction::class, 'client', 'project')
                    ->perform($request->input('query'));
        $role = 'agent';
        return view('agent.search', compact('searchResults', 'searchterm', 'role'));
    }
}
