<?php

namespace App\Http\Controllers\Super;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
	
    public function index(){
    	return view('super.index');
    }

    public function profile(){
    	return view('super.profile');
    }

    public function settings(){
    	return view('super.settings');
    }

    public function activities(){
    	return view('super.activities');
    }
}
