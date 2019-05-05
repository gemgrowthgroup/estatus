<?php

namespace App\Http\Controllers\Admin;

use App\Vehicle;
use App\VehicleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        $types = VehicleType::all();
        $role = 'admin';
        return view('admin.vehicles.index', compact('role', 'types', 'vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'description' => 'min:10',
            'vehicle_type_id' => 'required'
        ]);

        Vehicle::create($data);

        return redirect('/admin/vehicles')->with('success', 'You have successfully created '.$request->name.' as a new vehicle.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $types = VehicleType::all();
        $role = 'admin';
        return view('admin.vehicles.edit', compact('role', 'types', 'vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->vehicle_type_id = $request->vehicle_type_id;
        $vehicle->units = $request->units;
        $vehicle->deployed = $request->deployed;
        $vehicle->save();

        return redirect('/admin/vehicles')->with('success', 'You have successfully updated '.$vehicle->name.'.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);

        if($vehicle->status == 'enabled'){
            $vehicle->status = 'disabled';
            $vehicle->save();

            return redirect('/admin/vehicles')->with('success', 'You have successfully disabled '.$vehicle->name.'.');
        } else {
            $vehicle->status = 'enabled';
            $vehicle->save();

            return redirect('/admin/vehicles')->with('success', 'You have successfully enabled '.$vehicle->name.'.');
        }
        
    }
}
