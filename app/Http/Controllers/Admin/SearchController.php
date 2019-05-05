<?php

namespace App\Http\Controllers\Admin;

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
		return view('admin.index');
	}

    public function search(Request $request)
    {
 
        $searchterm = $request->input('query');
 
        $searchResults = (new Search())                    
                    ->registerModel(Vehicle::class, 'name', 'description')
                    ->registerModel(Transaction::class, 'client', 'requested_by', 'project', 'origin')
                    ->registerModel(User::class, 'name' ,'email')
                    ->perform($request->input('query'));
        $role = 'admin';
        return view('admin.search', compact('searchResults', 'searchterm', 'role'));
    }
}
