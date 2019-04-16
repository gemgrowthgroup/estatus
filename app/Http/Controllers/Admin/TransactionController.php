<?php

namespace App\Http\Controllers\Admin;

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
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
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
        if($request->type == 'approval'){
            $transaction = Transaction::find($id);
            $transaction->vehicle_id = $request->vehicle;
            $transaction->status = 'Approved for Deployment';
            $transaction->save();

            return redirect('/admin')->with('success', 'You have approved the request of '.$transaction->requested_by.' and assigned a vehicle for deployment.');
        }

        if($request->type == 'deployment'){
            $transaction = Transaction::find($id);
            $transaction->status = 'Deployed';
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
