@extends('layouts.app')

@section('title', 'Request Details | E-Status Real Estate Asset Management')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">   
                <h6 class="m-0 font-weight-bold text-primary">Request Details</h6>                       
            </div>   
            <form method="post" action="/admin/transactions/{{$transaction->id}}" class="user" id="approveRequestForm">
                @csrf
                @method('patch')
                
                <div class="card-body py-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Date Created</span>
                        </div>
                        <input type="text" class="form-control" name="create" value="{{$transaction->created_at->format('d-M-Y h:ia')}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Last Updated</span>
                        </div>
                        <input type="text" class="form-control" name="create" value="{{$transaction->updated_at->format('d-M-Y h:ia')}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Client</span>
                        </div>
                        <input type="text" class="form-control" name="client" value="{{$transaction->client}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Project</span>
                        </div>
                        <input type="text" class="form-control" name="project" value="{{$transaction->project}}" disabled>
                    </div> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Origin</span>
                        </div>
                        <input type="text" class="form-control" name="origin" value="{{$transaction->origin}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Date Needed</span>
                            </div>
                            <input type="date" class="form-control" name="origin" value="{{$transaction->from}}" disabled>
                        </div>             
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Vehicle Type</span>
                        </div>
                        <select class="custom-select" name="type" disabled>
                            <option value="{{$transaction->vehicle_type_id}}">                                
                                    {{$type->name}}
                            </option>                            
                        </select>                        
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Vehicle</span>
                        </div>
                        <select class="custom-select" name="vehicle" disabled>
                            @if(isset($vehicle))
                            <option value="{{$vehicle->id}}" selected>                                
                                    {{$vehicle->name}}
                            </option>
                            @endif            
                        </select>                        
                    </div>                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Driver</span>
                        </div>
                        <select class="custom-select" name="driver" disabled>
                            @if($transaction->driver_id != null)
                            <option value="{{$transaction->driver_id}}" selected>                                
                                    {{$driver->name}}
                            </option> 
                              
                            @endif                        
                        </select>                        
                    </div>     
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Admin Notes</span>
                        </div>
                        <textarea name="admin_notes" style="width:65%" rows="11" class="form-control" disabled></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/agent/transactions" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Back</span>
                    </a>
                    {{-- @if($transaction->status_id == 5)
                    <form action="/agent/transactions/{{$transaction->id}}" method="POST">
                        @csrf
                        @method('patch')
                        <input type="text" class="d-none" name="type" value="return">
                        <button class="btn btn-primary btn-icon-split" type="submit">
                            <span class="icon text-white-50">
                                <i class="fas fa-reply"></i>
                            </span>
                            <span class="text">Return This Vehicle</span>
                        </button>
                    </form>

                    @elseif($transaction->status_id == 2 || $transaction->status_id == 1) --}}
                    {{-- <form action=""> --}}
                        <a class="btn btn-primary btn-icon-split @if($transaction->director_id == null) disabled @endif" href="/agent/transactions/{{$transaction->id}}/edit">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Edit Transaction</span>
                        </a>
                    {{-- </form> --}}
                    {{-- @endif --}}
                </div> 
            </form>
            
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
                        @if($agent->photo)
                            <img src="{{$agent->photo}}" alt="profile-photo" class="img-fluid">
                        @else
                            <img src="{{ asset('/images/users/default.jpg') }}" alt="profile-photo" class="img-fluid">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Agent</span>
                            </div>
                            <input type="text" class="form-control" name="name" value="{{$transaction->requested_by}}" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Manager</span>
                            </div>
                            <input type="text" class="form-control" name="manager" value="{{$transaction->requested_by}}" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend" style="width:35%">
                                <span class="input-group-text bg-primary text-white" style="width:100%">Mobile</span>
                            </div>
                            <input type="text" class="form-control" name="mobile" value="{{$agent->mobile}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Email</span>
                    </div>
                    <input type="text" class="form-control" name="email" value="{{$agent->email}}" disabled>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Agent Notes</span>
                    </div>
                    <textarea name="agent_notes" style="width:65%" rows="3" class="form-control" disabled>{{$transaction->agent_notes}}</textarea>
                </div>              
            </div>
        </div>
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Approved By</h6>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-4">
                            @if($agent->photo)
                                <img src="{{$agent->photo}}" alt="profile-photo" class="img-fluid">
                            @else
                                <img src="{{ asset('/images/users/default.jpg') }}" alt="profile-photo" class="img-fluid">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend" style="width:35%">
                                    <span class="input-group-text bg-primary text-white" style="width:100%">Name</span>
                                </div>
                                <input type="text" class="form-control" name="name" value="@if($transaction->director_id != null){{\App\User::find($transaction->director_id)->name }} @endif" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend" style="width:35%">
                                    <span class="input-group-text bg-primary text-white" style="width:100%">Position</span>
                                </div>
                                <input type="text" class="form-control" name="manager" value="Director" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend" style="width:35%">
                                    <span class="input-group-text bg-primary text-white" style="width:100%">Mobile</span>
                                </div>
                                <input type="text" class="form-control" name="mobile" value="@if($transaction->director_id != null){{\App\Profile::find($transaction->director_id)->mobile}}@endif" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Email</span>
                        </div>
                        <input type="text" class="form-control" name="email" value="@if($transaction->director_id != null){{\App\Profile::find($transaction->director_id)->email}}@endif" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Director Notes</span>
                        </div>
                        <textarea name="director_notes" style="width:65%" rows="3" class="form-control" disabled>{{$transaction->director_notes}}</textarea>
                    </div>               
                </div>
            </div>
    </div>
</div>

@endsection