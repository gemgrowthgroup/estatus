<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){
    	return view('manager.index');
    }

    public function profile(){
    	return view('manager.profile');
    }

    public function settings(){
    	return view('manager.settings');
    }

    public function activities(){
    	return view('manager.activities');
    }
}
