<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Role;
use App\Agency;
use App\Profile;
use App\Status;
use App\Vehicle;
use App\VehicleType;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

        // $directors = User::find(id)->hasAnyRoles('Director')->get();

        // dd($directors);

        $profiles = Profile::where('id', Auth::user()->id)->get();

        foreach($profiles as $profile){
            $me = $profile;
        }

        return view('admin.transactions.index')->with([
            'me' => $me,
            'role' => 'admin',
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
        $vehicle = \App\Vehicle::where('id', $transaction->vehicle_id)->first();
        $role = 'admin';
        $driver = \App\User::where('id', $transaction->driver_id)->first();
        
        return view('admin.transactions.show', compact('transaction', 'type', 'statuses', 'vehicle' ,'role', 'agent', 'driver'));
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
        $role = 'admin';
        $driversCollection = \App\Role::with('users')->where('id', 6)->get();
        foreach($driversCollection as $driver){
            $thedrivers = $driver;
        }
        $drivers = $thedrivers->users()->get();
        
        return view('admin.transactions.edit', compact('transaction', 'type', 'statuses', 'vehicles' ,'role', 'agent', 'drivers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Transaction $transaction, Request $request)
    {
        
        if($request->type == 'approve'){
            $existing = Transaction::find($transaction->id);
            
            if($existing->vehicle_id != null){
                $vehicle = Vehicle::find($existing->vehicle_id);
                
                $vehicle->units++;
                $vehicle->deployed--;

                if($vehicle->status == 'disabled'){
                    $vehicle->status = 'enabled';
                }
                $vehicle->save();
            }
            
            $transaction->vehicle_id = $request->vehicle;
            $transaction->status_id = 3;
            $transaction->driver_id = $request->driver;

            $vehicle = Vehicle::find($transaction->vehicle_id);
            $vehicle->units--;
            $vehicle->deployed++;
            if($vehicle->units == 0){
                $vehicle->status = 'disabled';
            }
            $vehicle->save();

            $transaction->save();

            return redirect('/admin')->with('success', 'You have approved the request of '.$transaction->requested_by.' and assigned a vehicle for deployment.');
        }

        elseif($request->type == 'decline'){
            $transaction->status_id = 9;
            $transaction->save();

            return redirect('/admin')->with('success', 'You have declined the vehicle requested by '.$transaction->requested_by.'.');
        }

        elseif($request->type == 'deploy'){
            $transaction->status_id = 5;
            $transaction->deploy_date = now();
            $transaction->save();

            return redirect('/admin')->with('success', 'You have deployed the vehicle requested by '.$transaction->requested_by.'.');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 'Declined';
        $transaction->save();

        return redirect('/admin')->with('success', 'You have declined a request by '.$transaction->requested_by.'.');
    }
}
