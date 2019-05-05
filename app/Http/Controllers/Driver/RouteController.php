<?php

namespace App\Http\Controllers\Driver;

use Auth;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){

        $profiles = Profile::where('id', Auth::user()->id)->get();

        foreach($profiles as $profile){
            $me = $profile;
        }

    	return view('driver.index');
    }

    public function profile(){
    	return view('driver.profile');
    }

    public function settings(){
    	return view('driver.settings');
    }

    public function activities(){
    	return view('driver.activities');
    }
}
