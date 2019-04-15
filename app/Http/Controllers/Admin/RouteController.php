<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(){
    	return view('admin.index')->with('transactions', Transaction::all());
    }

    public function profile(){
    	return view('admin.profile');
    }

    public function settings(){
    	return view('admin.settings');
    }

    public function activities(){
    	return view('admin.activities');
    }
}
