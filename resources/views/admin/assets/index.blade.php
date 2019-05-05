@extends('layouts.app')


@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">All Assets</h1>
<p class="mb-4">All the approved vehicles are listed here, if not, please add vehicle. To easily manage the vehicles, you may use the search box below. You can search by anything inside the table and it will show up automatically if there is a match.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  		<h6 class="m-0 font-weight-bold text-primary">All Entries</h6>
      <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Previous Transactions:</div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Vehicle Feedback</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Driver Feedback</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Reported Vehicles</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Reported Drivers</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addVehicle">Add Vehicle</a>
            </div>
        </div>
	</div>
	<div class="card-body">
      	<div class="table-responsive">
        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          		<thead>
            		<tr>
                        <th>Vehicle</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Actions</th>
            		</tr>
          		</thead>
          		<tfoot>
            		<tr>
            			<th>Vehicle</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Actions</th>
            		</tr>
          		</tfoot>
          		<tbody>
                    @foreach($vehicles as $vehicle)
                    	<tr>
                    		<td>{{ $vehicle->name }}</td>
                    		<td>{{ str_limit($vehicle->description, 50, '...') }}</td>
                    		<td>{{ $vehicle->status }}</td>
                    		<td>
                                @foreach($types as $type)
                                    @if($vehicle->vehicle_type_id == $type->id)
                                        {{ $type->name }}
                                    @endif
                                @endforeach      
                            </td>
                    		<td>
                    			<button class="btn btn-primary btn-icon-split btn-sm editVehicle" data-toggle="modal" data-target="#editVehicle" data-id="{{$vehicle->id}}" data-name="{{$vehicle->name}}" data-description="{{$vehicle->description}}" data-vehicle="{{$vehicle->vehicle_type_id}}">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-edit"></i>
                    				</span>
                    				<span class="text">Edit</span>
                    			</button>
                                @if($vehicle->status == 'enabled')
                    			<button class="btn btn-danger btn-icon-split btn-sm toggleStatus" data-toggle="modal" data-target="#toggleStatus" data-id="{{$vehicle->id}}" data-purpose="disable">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-times"></i>
                    				</span>
                    				<span class="text">Disable</span>
                    			</button>
                                @else
                                <button class="btn btn-success btn-icon-split btn-sm toggleStatus" data-toggle="modal" data-target="#toggleStatus" data-id="{{$vehicle->id}}" data-purpose="enable">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Enable</span>
                                </button>
                                @endif

                    		</td>
                    	</tr>
                    @endforeach
          		</tbody>
        	</table>
      	</div>
    </div>
</div> 
{{-- Add Vehicle --}}
<div class="modal fade" id="addVehicle" tabindex="-1" role="dialog" aria-labelledby="addVehicle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/admin/vehicles" id="addVehicleForm">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Vehicle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Name</span>
                    </div>
                    <input id="vehicleName" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Description</span>
                    </div>
                    <textarea name="description" class="form-control" rows="8"></textarea>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select Type</span>
                    </div>
                    <select name="vehicle_type_id" class="custom-select" id="vehicleType">
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
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
                    <span class="text">Submit</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div> 

{{-- Disable or Enable Vehicle --}}
<div class="modal fade" id="toggleStatus" tabindex="-1" role="dialog" aria-labelledby="toggleStatus" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="toggleVehicleStatus">
            @csrf
            @method('delete')
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Are you sure you want to do this?</p>
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
                    <span class="text">Confirm</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div> 

{{-- Edit Vehicle --}}
<div class="modal fade" id="editVehicle" tabindex="-1" role="dialog" aria-labelledby="editVehicle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="editVehicleForm">
            @csrf
            @method('patch')
            <div class="modal-header">
                <h5 class="modal-title">Edit Vehicle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Name</span>
                    </div>
                    <input id="editVehicleName" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Description</span>
                    </div>
                    <textarea id="editVehicleDescription" name="description" class="form-control" rows="8"></textarea>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" style="width:35%">
                        <span class="input-group-text bg-primary text-white" style="width:100%">Select Type</span>
                    </div>
                    <select name="vehicle_type_id" class="custom-select" id="editVehicleType">
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
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
    let toggleButtons = document.querySelectorAll('.toggleStatus');

    toggleButtons.forEach(function (toggleButton){
        toggleButton.addEventListener('click', function(){

            let toggleID = toggleButton.getAttribute('data-id');
            
            document.querySelector('#toggleVehicleStatus').setAttribute('action', '/admin/vehicles/' + toggleID);
        });
    });

    let editVehicles = document.querySelectorAll('.editVehicle')

    editVehicles.forEach(function (editVehicle){
        editVehicle.addEventListener('click', function(){
            let vehicleID = editVehicle.getAttribute('data-id');
            document.querySelector('#editVehicleName').value = editVehicle.getAttribute('data-name');
            document.querySelector('#editVehicleDescription').innerHTML = editVehicle.getAttribute('data-description');
            document.querySelector('#editVehicleType').value = editVehicle.getAttribute('data-vehicle');

            document.querySelector('#editVehicleForm').setAttribute('action', '/admin/vehicles/'+vehicleID);
        })
    });

</script>

@endsection