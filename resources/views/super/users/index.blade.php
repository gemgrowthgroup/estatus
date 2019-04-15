@extends('layouts.super')



@section('sudo-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">User Accounts</h1>
<p class="mb-4">All the created admins of their respective agencies are listed here, to easily find the admins if there are too many, you may use the search box below. You can search by anything inside the table and it will show up automatically if there is a match.</p>


 

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">All Entries</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                {{-- <div class="dropdown-header">Assign Users:</div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createAdmin">Create Admin</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createDirector">Create Director</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createManager">Create Manager</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createAgent">Create Agent</a>
                <div class="dropdown-divider"></div> --}}
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
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($users as $user)
                        @if(!$user->hasAnyRole('Super Admin'))
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm btn-icon-split editButton" data-toggle="modal" data-target="#editUser" data-id="{{ $user->id}}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-role="{{ implode(', ', $user->roles()->get()->pluck('id')->toArray()) }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm btn-icon-split deleteButton" data-toggle="modal" data-target="#deleteUser" data-id="{{ $user->id}}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-role="{{ implode(', ', $user->roles()->get()->pluck('id')->toArray()) }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-info btn-sm btn-icon-split resetPassword">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Reset PW</span>
                                </a>
                            </td>
                        </tr>
                        @endif
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

{{-- Edit User --}}
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="registerUser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="editUserForm">
            @csrf
            @method('patch')
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Name</span>
                    </div>
                    <input id="editname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

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
                    <input id="editemail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select Role</span>
                    </div>
                    <select name="role" class="custom-select" id="editrole">
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
                    <span class="text">Update</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>  

<script type="text/javascript">
    
let editButtons = document.querySelectorAll('.editButton');

editButtons.forEach(function (editButton){
    editButton.addEventListener('click', function(){

        let editId = editButton.getAttribute('data-id');
        let name = editButton.getAttribute('data-name');
        let email = editButton.getAttribute('data-email');
        let role = editButton.getAttribute('data-role');

        document.querySelector('#editname').setAttribute('value', name);
        document.querySelector('#editemail').setAttribute('value', email);
        document.querySelector('#editrole').value = editButton.getAttribute('data-role');
        
        document.querySelector('#editUserForm').setAttribute('action', '/super/users/' + editId);
    });
});

</script>

@endsection

