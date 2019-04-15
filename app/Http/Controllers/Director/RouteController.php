<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){
    	return view('director.index');
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
