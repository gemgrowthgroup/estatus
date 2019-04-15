<?php

namespace App\Http\Controllers\Super;

use Auth;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super.users.index')->with(['users' => User::all(), 'roles' => Role::all()]);
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
            return redirect()->route('super.users.index');
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
            return redirect()->route('super.users.index')->with('warning', 'You are not allowed to edit yourself.');
        }

        $user = User::find($id);
        $user->roles()->sync($request->role);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/super/users')->with('success', 'You have successfully updated '.$user->name.'!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('super.users.index')->with('warning', 'You are not allowed to delete yourself.');
        }

        $user = User::find($id);

        if($user){
            $user->roles()->detach();
            $user->delete();
            return redirect()->route('admin.users.index')->with('success', 'User has been deleted.');
        }
        return redirect()->route('admin.users.index')->with('warning', 'User cannot be deleted.');
    }
}
