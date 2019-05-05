<?php

namespace App\Http\Controllers\Agent;

use Auth;
use App\Profile;
use App\Transaction;
use App\VehicleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){

        $profiles = Profile::where('id', Auth::user()->id)->get();
        $agency = Auth::user()->agencies()->first();
        $statuses = \App\Status::all();
        $role = 'agent';
        $types = VehicleType::all();
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();

        foreach($profiles as $profile){
            $me = $profile;
        }
        
    	return view('agent.index', compact('me', 'role', 'transactions', 'types', 'statuses', 'agency'));
    }

    public function profile(){
    	return view('agent.profile');
    }

    public function settings(){
    	return view('agent.settings');
    }

    public function activities(){
    	return view('agent.activities');
    }
}
