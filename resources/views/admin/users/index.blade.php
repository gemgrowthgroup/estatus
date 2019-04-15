@extends('layouts.admin')


@section('admin-content')


<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Agent Accounts</h1>
<p class="mb-4">All the created agents of your agency are listed here, to easily find agents if there are too many, you may use the search box below. You can search by anything inside the table and it will show up automatically if there is a match.</p>

 

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">All Entries</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Assign Users:</div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createAdmin">Create Admin</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createDirector">Create Director</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createManager">Create Manager</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createAgent">Create Agent</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerUser">Register a User</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Manager</th>
                        <th>Director</th>
                        <th>Agency</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Manager</th>
                        <td>Director</td>
                        <th>Agency</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($allAdmins as $admin)
                        <tr>
                            <td><a href="/admins/{{$admin->id}}">{{$admin->first_name}} {{$admin->last_name}}</a></td>
                            <td>Administrator</td>
                            <td>Not Applicable</td>
                            <td>Not Applicable</td>
                            <td>
                                @foreach($allAgencies as $agency)
                                    @if($agency->id == $admin->agency_id)
                                        {{$agency->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="px-2">
                                        <a href="#" class="edit-admin-button" data-id="{{$admin->id}}" data-firstname="{{$admin->first_name}}" data-middlename="{{$admin->middle_name}}" data-lastname="{{$admin->last_name}}" data-agency="{{$admin->agency_id}}" data-toggle="modal" data-target="#editAdminProfile">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                    </div>
                                    <div class="">
                                        <label class="switch align-middle">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>                                
                            </td>
                        </tr>
                    @endforeach
                    @foreach($allDirectors as $director)
                        <tr>
                            <td><a href="/directors/{{$director->id}}">{{$director->first_name}} {{$director->last_name}}</a></td>
                            <td>Agency Director</td>
                            <td>Not Applicable</td>
                            <td>Not Applicable</td>
                            <td>
                                @foreach($allAgencies as $agency)
                                    @if($agency->id == $director->agency_id)
                                        {{$agency->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <div class="row align-items-center align-middle">
                                    <div class="px-2">
                                        <a href="#" class="edit-director-button" data-id="{{$director->id}}" data-firstname="{{$director->first_name}}" data-middlename="{{$director->middle_name}}" data-lastname="{{$director->last_name}}" data-agency="{{$director->agency_id}}" data-toggle="modal" data-target="#editDirectorProfile">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                    </div>
                                    <div class="">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @foreach($allManagers as $manager)
                        <tr>
                            <td><a href="/managers/{{$manager->id}}">{{$manager->first_name}} {{$manager->last_name}}</a></td>
                            <td>Agency Manager</td>
                            <td>Not Applicable</td>
                            <td>
                                @foreach($allDirectors as $director)
                                    @if($director->id == $manager->director_id)
                                        {{$director->first_name}} {{$director->last_name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($allAgencies as $agency)
                                    @foreach($allDirectors as $director)
                                        @if($agency->id == $director->agency_id)
                                            @if($director->id == $manager->director_id)
                                                {{$agency->name}}
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            </td>
                            <td>
                                <div class="row align-items-center align-middle">
                                    <div class="px-2">
                                        <a href="#" class="edit-manager-button" data-id="{{$manager->id}}" data-firstname="{{$manager->first_name}}" data-middlename="{{$manager->middle_name}}" data-lastname="{{$manager->last_name}}" data-director="{{$manager->director_id}}" data-toggle="modal" data-target="#editManagerProfile">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                    </div>
                                    <div class="">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @foreach($allAgents as $agent)
                        <tr>
                            <td><a href="/agents/{{$agent->id}}">{{$agent->first_name}} {{$agent->last_name}}</a></td>
                            <td>Sales Agent</td>
                            <td>
                                @foreach($allManagers as $manager)
                                    @if($manager->id == $agent->manager_id)
                                        {{$manager->first_name}} {{$manager->last_name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($allDirectors as $director)
                                    @foreach($allManagers as $manager)
                                        @if($manager->id == $agent->manager_id)
                                            @if($manager->director_id == $director->id)
                                                {{$director->first_name}}  {{$director->last_name}}
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            </td>
                            <td>
                               @foreach($allManagers as $manager)
                                    @if($manager->id == $agent->manager_id)
                                        @foreach($allDirectors as $director)
                                            @if($director->id == $manager->director_id)
                                                @foreach($allAgencies as $agency)
                                                    @if($agency->id == $director->agency_id)
                                                        {{$agency->name}}
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                               @endforeach
                            </td>
                            <td>
                                <div class="row align-items-center align-middle">
                                    <div class="px-2">
                                        <a href="#" class="edit-agent-button" data-id="{{$agent->id}}" data-firstname="{{$agent->first_name}}" data-middlename="{{$agent->middle_name}}" data-lastname="{{$agent->last_name}}" data-manager="{{$agent->manager_id}}" data-toggle="modal" data-target="#editAgentProfile">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                    </div>
                                    <div class="">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    

{{-- Register User --}}
<div class="modal fade" id="registerUser" tabindex="-1" role="dialog" aria-labelledby="registerUser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">User Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Full Name</span>
                    </div>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Email Address</span>
                    </div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Password</span>
                    </div>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Confirm Password</span>
                    </div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select Role</span>
                    </div>
                    <select name="role_id" class="custom-select">
                        @foreach($roles as $role)
                            @if($role->id != 1)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Close</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Register</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Create Admin --}}
<div class="modal fade" id="createAdmin" tabindex="-1" role="dialog" aria-labelledby="createAdmin" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/admins" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Create Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select User</span>
                    </div>
                    <select class="custom-select" name="user_id">
                        @foreach($admins as $admin)
                            <option value="{{$admin->id}}">{{$admin->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Agency</span>
                    </div>
                    <select class="custom-select" name="agency_id">
                        @foreach($agencies as $agency)
                            <option value="{{$agency->id}}">{{$agency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Create Director --}}
<div class="modal fade" id="createDirector" tabindex="-1" role="dialog" aria-labelledby="createDirector" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/directors" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Create Director</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select User</span>
                    </div>
                    <select class="custom-select" name="user_id">
                        @foreach($directors as $director)
                            <option value="{{$director->id}}">{{$director->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Agency</span>
                    </div>
                    <select class="custom-select" name="agency_id">
                        @foreach($agencies as $agency)
                            <option value="{{$agency->id}}">{{$agency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Create Manager --}}
<div class="modal fade" id="createManager" tabindex="-1" role="dialog" aria-labelledby="createManager" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/managers" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Create Manager</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select User</span>
                    </div>
                    <select class="custom-select" name="user_id">
                        @foreach($managers as $manager)
                            <option value="{{$manager->id}}">{{$manager->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Agency</span>
                    </div>
                    <select class="custom-select" name="agency_id">
                        @foreach($agencies as $agency)
                            <option value="{{$agency->id}}">{{$agency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Director</span>
                    </div>
                    <select class="custom-select" name="director_id">
                        @foreach($allDirectors as $director)
                            <option value="{{$director->id}}">{{$director->first_name}} {{$director->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">                    
                    <input type="file" name="photo" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>     

{{-- Create Agent --}}
<div class="modal fade" id="createAgent" tabindex="-1" role="dialog" aria-labelledby="createAgent" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/agents" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Create Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select User</span>
                    </div>
                    <select class="custom-select" name="user_id">
                        @foreach($agents as $agent)
                            <option value="{{$agent->id}}">{{$agent->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Agency</span>
                    </div>
                    <select class="custom-select" name="agency_id">
                        @foreach($agencies as $agency)
                            <option value="{{$agency->id}}">{{$agency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Director</span>
                    </div>
                    <select class="custom-select" name="director_id">
                        @foreach($allDirectors as $director)
                            <option value="{{$director->id}}">{{$director->first_name}} {{$director->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Manager</span>
                    </div>
                    <select class="custom-select" name="manager_id">
                        @foreach($allManagers as $manager)
                            <option value="{{$manager->id}}">{{$manager->first_name}} {{$manager->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Edit Admin --}}
<div class="modal fade" id="editAdminProfile" tabindex="-1" role="dialog" aria-labelledby="editAdminProfile" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" id="editAdminForm">
            @csrf
            @method('patch')
            <div class="modal-header">
                <h5 class="modal-title">Edit Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control" id="adminFirstName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control" id="adminMiddleName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control" id="adminLastName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Agency</span>
                    </div>
                    <select class="custom-select" name="agency_id" id="adminAgency">
                        @foreach($agencies as $agency)
                            <option value="{{$agency->id}}">{{$agency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input" id="adminPhoto">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Edit Director --}}
<div class="modal fade" id="editDirectorProfile" tabindex="-1" role="dialog" aria-labelledby="editDirectorProfile" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" id="editDirectorForm">
            @csrf
            @method('patch')
            <div class="modal-header">
                <h5 class="modal-title">Edit Director</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control" id="directorFirstName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control" id="directorMiddleName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control" id="directorLastName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Agency</span>
                    </div>
                    <select class="custom-select" name="agency_id" id="directorAgency">
                        @foreach($agencies as $agency)
                            <option value="{{$agency->id}}">{{$agency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Edit Manager --}}
<div class="modal fade" id="editManagerProfile" tabindex="-1" role="dialog" aria-labelledby="editManagerProfile" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" id="editManagerForm">
            @csrf
            @method('patch')
            <div class="modal-header">
                <h5 class="modal-title">Edit Manager</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control" id="managerFirstName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control" id="managerMiddleName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control" id="managerLastName">
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Director</span>
                    </div>
                    <select class="custom-select" name="director_id" id="managerDirector">
                        @foreach($allDirectors as $director)
                            <option value="{{$director->id}}">{{$director->first_name}} {{$director->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">                    
                    <input type="file" name="photo" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>     

{{-- Edit Agent --}}
<div class="modal fade" id="editAgentProfile" tabindex="-1" role="dialog" aria-labelledby="editAgentProfile" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" id="editAgentForm">
            @csrf
            @method('patch')
            <div class="modal-header">
                <h5 class="modal-title">Edit Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">First Name</span>
                    </div>
                    <input type="text" name="first_name" class="form-control" id="agentFirstName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Middle Name</span>
                    </div>
                    <input type="text" name="middle_name" class="form-control" id="agentMiddleName">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Last Name</span>
                    </div>
                    <input type="text" name="last_name" class="form-control" id="agentLastName">
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:30%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Manager</span>
                    </div>
                    <select class="custom-select" name="manager_id" id="agentManager">
                        @foreach($allManagers as $manager)
                            <option value="{{$manager->id}}">{{$manager->first_name}} {{$manager->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div> 

@endsection

