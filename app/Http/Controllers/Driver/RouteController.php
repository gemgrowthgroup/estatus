<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){
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
