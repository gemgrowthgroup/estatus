@extends('layouts.app')


@section('content')

{{-- Edit Vehicle --}}
<div class="col-md-6">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Vehicle Details</h6>  
        </div>
        <form method="POST" id="editVehicleForm" action="/admin/vehicles/{{$vehicle->id}}">
        @csrf
        @method('patch')        
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Name</span>
                    </div>
                    <input id="editVehicleName" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $vehicle->name }}" required autofocus>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Description</span>
                    </div>
                    <textarea id="editVehicleDescription" name="description" class="form-control" rows="8">{{$vehicle->description}}</textarea>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select Type</span>
                    </div>
                    <select name="vehicle_type_id" class="custom-select" id="editVehicleType">
                        @foreach($types as $type)
                        <option value="{{$type->id}}" @if($vehicle->vehicle_type_id == $type->id) selected @endif>{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Units</span>
                    </div>
                    <input id="editVehicleUnits" value="{{$vehicle->units}}" type="number" class="form-control" name="units" required autofocus>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Deployed</span>
                    </div>
                    <input id="editVehicleDeployed" value="{{$vehicle->deployed}}" type="number" class="form-control" name="deployed" required autofocus>
                </div>
            </div>
            <div class="card-footer">
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
   

    @endsection