<?php

namespace App\Http\Controllers\Agent;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){
    	return view('agent.index')->with('transactions', Transaction::all());
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
