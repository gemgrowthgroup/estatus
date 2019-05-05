@extends('layouts.app')

@section('title', 'My Profile | E-Status Real Estate Asset Management')

@section('content')
<div class="row">    
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-4">
                        @if($profile->photo)
                            <img src="{{$profile->photo}}" alt="profile-photo" class="img-fluid">
                        @else
                            <img src="{{ asset('/images/users/default.jpg') }}" alt="profile-photo" class="img-fluid">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Name</span>
                            </div>
                            <input type="text" class="form-control" name="name" value="{{$profile->name}}" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Manager</span>
                            </div>
                            <input type="text" class="form-control" name="manager" value="{{$profile->name}}" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Mobile</span>
                            </div>
                            <input type="text" class="form-control" name="mobile" value="{{$profile->mobile}}">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Email</span>
                    </div>
                    <input type="text" class="form-control" name="email" value="{{$profile->email}}" disabled>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" value="{{$profile->address}}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Biography</span>
                    </div>
                    <textarea name="profile_notes" style="width:65%" rows="6" class="form-control">{{$profile->biography}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Update Profile</span>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Requested By</h6>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-4">
                        @if($profile->photo)
                            <img src="{{$profile->photo}}" alt="profile-photo" class="img-fluid">
                        @else
                            <img src="{{ asset('/images/users/default.jpg') }}" alt="profile-photo" class="img-fluid">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">profile</span>
                            </div>
                            <input type="text" class="form-control" name="name" value="{{$profile->name}}" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Manager</span>
                            </div>
                            <input type="text" class="form-control" name="manager" value="{{$profile->name}}" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Mobile</span>
                            </div>
                            <input type="text" class="form-control" name="mobile" value="{{$profile->mobile}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Email</span>
                    </div>
                    <input type="text" class="form-control" name="email" value="{{$profile->email}}" disabled>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" value="{{$profile->address}}" disabled>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Biography</span>
                    </div>
                    <textarea name="profile_notes" style="width:65%" rows="8" class="form-control" disabled>{{$profile->biography}}</textarea>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection