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

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agency = Auth::user()->agencies()->first();

        $employees = Agency::find($agency->id)->users()->get();

        $transactions = Agency::find($agency->id)->transactions()->get();

        $profiles = Profile::where('id', Auth::user()->id)->get();

        foreach($profiles as $profile){
            $me = $profile;
        }

        return view('director.transactions.index')->with([
            'me' => $me,
            'role' => 'director',
            'transactions' => $transactions, 
            'statuses' => Status::all(),
            'vehicles' => Vehicle::all(), 
            'types' => VehicleType::all(), 
            'agency' => $agency, 
            'employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        $type = \App\VehicleType::where('id', $transaction->vehicle_type_id)->first();
        $agent = \App\Profile::where('id', $transaction->user_id)->first();
        $statuses = \App\Status::all();
        $vehicles = \App\Vehicle::all();
        $role = 'director';
        return view('director.transactions.show', compact('transaction', 'type', 'statuses', 'vehicles' ,'role', 'agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $type = \App\VehicleType::where('id', $transaction->vehicle_type_id)->first();
        $agent = \App\Profile::where('id', $transaction->user_id)->first();
        $statuses = \App\Status::all();
        $vehicles = \App\Vehicle::all();
        $role = 'director';
        return view('director.transactions.edit', compact('transaction', 'type', 'statuses', 'vehicles' ,'role', 'agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        if($request->type == 'approve'){
            $transaction->director_notes = $request->director_notes;
            $transaction->status_id = 2;
            $transaction->director_id = Auth::user()->id;
            $transaction->save();

            return redirect('/director/transactions')->with('success', 'You have approved the vehicle request of '.$transaction->requested_by);
        } else {
            $transaction->director_notes = $request->director_notes;
            $transaction->status_id = 9;
            $transaction->director_id = Auth::user()->id;
            $transaction->save();

            return redirect('/director/transactions')->with('success', 'You have declined the vehicle request of '.$transaction->requested_by);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
