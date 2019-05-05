<?php

namespace App\Http\Controllers\Director;

use App\Vehicle;
use App\Agency;
use App\User;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function index(){
		return view('director.index');
	}

    public function search(Request $request)
    {
 
        $searchterm = $request->input('query');
 
        $searchResults = (new Search())                    
                    ->registerModel(Vehicle::class, 'name', 'description')
                    ->registerModel(Transaction::class, 'client', 'requested_by', 'project', 'origin')
                    ->registerModel(User::class, 'name' ,'email')
                    ->perform($request->input('query'));
        $role = 'director';
        return view('director.search', compact('searchResults', 'searchterm', 'role'));
    }
}
