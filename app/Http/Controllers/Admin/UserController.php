<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Role;
use App\User;
use App\Agency;
use App\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Auth::user()->agency()->get();

        foreach($agencies as $agency){
            $myAgency = $agency;
        }

        $employees = Agency::find($myAgency->id)->users()->get();

        return view('admin.users.index')->with(['employees' => $employees, 'roles' => Role::all()]);
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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password'),
        ]);

        $role = Role::select('id')->where('id', $request->role_id)->first();

        $user->roles()->attach($role);

        $profile = new Profile;

        $user->profile()->save($profile);

        return redirect('/admin/users')->with('success', 'You have successfully created a new user: '.$user->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning', 'You are not allowed to edit yourself.');
        }

        $user = User::find($id);
        $user->roles()->sync($request->role);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/admin/users')->with('success', 'You have successfully updated '.$user->name.'!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
