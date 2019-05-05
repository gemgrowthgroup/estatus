<?php

namespace App\Http\Controllers\Director;

use Auth;
use App\User;
use App\Vehicle;
use App\Profile;
use App\Agency;
use App\Status;
use App\VehicleType;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){

    	$agency = Auth::user()->agencies()->first();
        // dd($agency);

        $employees = Agency::find($agency->id)->users()->get();

        $transactions = Agency::find($agency->id)->transactions()->get();

        $profiles = Profile::where('id', Auth::user()->id)->get();

        foreach($profiles as $profile){
            $me = $profile;
        }

        // $types = Vehicle::where('vehicle_type_id', 1)->get();

        // dd($types);

        return view('director.index')->with([
            'me' => $me,
            'role' => 'director',
            'transactions' => $transactions, 
            'statuses' => Status::all(),
            'vehicles' => Vehicle::all(), 
            'types' => VehicleType::all(), 
            'agency' => $agency, 
            'employees' => $employees]);
    }

    public function profile(){
    	return view('director.profile');
    }

    public function settings(){
    	return view('director.settings');
    }

    public function activities(){
    	return view('director.activities');
    }
}
