<?php

namespace App\Http\Controllers\Admin;

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

        $employees = Agency::find($agency->id)->users()->get();

        // dd(Agency::where('id', 2)->first());

        $transactions = Agency::find($agency->id)->transactions()->get();

        $profiles = Profile::where('id', Auth::user()->id)->get();

        foreach($profiles as $profile){
            $me = $profile;
        }


        // dd($employees);

    	return view('admin.index')->with([
            'me' => $me,
            'role' => 'admin',
            'transactions' => $transactions, 
            'statuses' => Status::all(),
            'vehicles' => Vehicle::all(), 
            'types' => VehicleType::all(), 
            'agency' => $agency, 
            'employees' => $employees]);
    }

    public function profile(){
        $role = 'admin';
        $profile = \App\Profile::where('user_id', Auth::user()->id)->first();
    	return view('admin.profile', compact('role', 'profile'));
    }

    public function settings(){
        $role = 'admin';
    	return view('admin.settings', compact('role'));
    }

    public function activities(){
        $role = 'admin';
    	return view('admin.activities', compact('role'));
    }
}
