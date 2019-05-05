@extends('layouts.app')

@section('title', 'Request Details | E-Status Real Estate Asset Management')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">   
                <h6 class="m-0 font-weight-bold text-primary">Request Details</h6>                       
            </div>   
            <form method="post" action="/director/transactions/{{$transaction->id}}" class="user" id="approveRequestForm">
                @csrf
                @method('patch')
                
                <div class="card-body py-3">
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
                            <span class="input-group-text bg-primary text-white" style="width:100%">Agent Notes</span>
                        </div>
                        <textarea name="agent_notes" style="width:65%" rows="3" class="form-control" disabled>{{$transaction->agent_notes}}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Director Notes</span>
                        </div>
                        <textarea name="director_notes" style="width:65%" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/director/transactions" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Back</span>
                    </a>                    
                    <button type="submit" class="btn btn-primary btn-icon-split" name="type" value="approve">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Approve Request</span>
                    </button>
                    <button type="submit" class="btn btn-danger btn-icon-split" name="type" value="decline">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Decline Request</span>
                    </button>
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
                        <span class="input-group-text bg-primary text-white" style="width:100%">Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" value="{{$agent->address}}" disabled>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Biography</span>
                    </div>
                    <textarea name="agent_notes" style="width:65%" rows="8" class="form-control" disabled>{{$agent->biography}}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection