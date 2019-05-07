<?php

namespace App\Http\Controllers\Agent;

use Auth;
use Str;
use App\Profile;
use App\Status;
use App\Transaction;
use App\Vehicle;
use App\VehicleType;
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

        $profiles = Profile::where('id', Auth::user()->id)->get();

        foreach($profiles as $profile){
            $me = $profile;
        }
        $role = 'agent';
        $transactions = Transaction::all();
        $types = VehicleType::all();
        $statuses = Status::all();

    	return view('agent.transactions.index', compact('me', 'role', 'transactions', 'types', 'statuses'));
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
        dd($request);
        $user = Auth::user();
        $agency = $user->agencies()->first();
        // dd($agency->id);
        $transaction = Transaction::create([
            'reference' => strtoupper(str_random(6)),
            'requested_by' => $user->name,
            'user_id' => $user->id,
            'client' => $request->client,
            'from' => $request->from,
            'project' => $request->project,
            'origin' => $request->origin,
            'vehicle_type_id' => $request->vehicle_type,
            'agency_id' => $agency->id  
        ]);

        $transaction->save();
        $user->transactions()->attach($transaction);


        return redirect()->route('agent.transactions.index')->with(['success' => 'You have successfully submitted a vehicle request for '.$request->client.'. Please contact your manager for faster approval.', 'transactions' => Transaction::all(), 'types' => VehicleType::all()]);
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
        $role = 'agent';
        $driver = \App\User::where('id', $transaction->driver_id)->first();
        return view('agent.transactions.show', compact('role', 'type', 'agent', 'statuses', 'vehicle', 'driver', 'transaction'));
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
        $vehicle = \App\Vehicle::where('id', $transaction->vehicle_id)->first();
        $role = 'agent';
        $driver = \App\User::where('id', $transaction->driver_id)->first();
        return view('agent.transactions.edit', compact('role', 'type', 'agent', 'statuses', 'vehicle', 'driver', 'transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if($request->type == 'return'){
            $transaction = Transaction::find($id);
            $transaction->status_id = 6;
            $transaction->return_date = now();

            $vehicle = \App\Vehicle::where('id', $transaction->vehicle_id)->first();
            $vehicle->units++;
            $vehicle->deployed--;
            $vehicle->save();
            $myVehicle = Vehicle::where('id', $vehicle)->get()->pluck('name');


            $transaction->save();

            return redirect()->route('agent.transactions.index')->with(['success' => 'You have successfully returned the '.$myVehicle.' you requested.', 'transactions' => Transaction::all(), 'types' => VehicleType::all()]);
        }

        if($request->type == 'edit'){
            $transaction = Transaction::find($id);
            $transaction->client = $request->client;
            $transaction->from = $request->from;
            $transaction->project = $request->project;
            $transaction->origin = $request->origin;
            $transaction->vehicle_type_id = $request->vehicle_type;
            $transaction->save();

            return redirect()->route('agent.index')->with(['success' => 'You have successfully updated the vehicle request for '.$transaction->client.'.', 'transactions' => Transaction::all(), 'types' => VehicleType::all()]);
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
        // dd($id);
        $role = implode(', ', Auth::user()->roles()->get()->pluck('name')->toArray());
        $transaction = Transaction::find($id);
        $transaction->status = 'Cancelled';
        $transaction->save();

        return redirect()->route('agent.index')->with(['success' => 'You have successfully cancelled your vehicle request.', 'transactions' => Transaction::all(), 'types' => VehicleType::all()]);
    }
}
