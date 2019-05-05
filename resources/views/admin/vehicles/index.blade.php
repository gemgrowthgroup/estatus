@extends('layouts.app')


@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">All Vehicles</h1>
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
                        <th>Status</th>
                        <th>Type</th>
                        <th class="text-center">Available</th>
                        <th class="text-center">Deployed</th>
                        <th class="text-center">Actions</th>
            		</tr>
          		</thead>
          		<tfoot>
            		<tr>
            			<th>Vehicle</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th class="text-center">Available</th>
                        <th class="text-center">Deployed</th>
                        <th class="text-center">Actions</th>
            		</tr>
          		</tfoot>
          		<tbody>
                    @foreach($vehicles as $vehicle)
                    	<tr>
                    		<td>{{ $vehicle->name }}</td>
                    		<td>{{ $vehicle->status }}</td>
                    		<td>
                                @foreach($types as $type)
                                    @if($vehicle->vehicle_type_id == $type->id)
                                        {{ $type->name }}
                                    @endif
                                @endforeach      
                            </td>
                            <td class="text-center">{{$vehicle->units}}</td>
                            <td class="text-center">{{$vehicle->deployed}}</td>
                    		<td class="text-center">                                
                                <a class="btn btn-primary btn-icon-split btn-sm" href="/admin/vehicles/{{$vehicle->id}}/edit">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-edit"></i>
                    				</span>
                    				<span class="text">Edit</span>
                    			</a>
                                @if($vehicle->status == 'disabled' && $vehicle->units != 0)
                                <button class="btn btn-success btn-icon-split btn-sm toggleStatus" data-toggle="modal" data-target="#toggleStatus" data-id="{{$vehicle->id}}" data-purpose="enable">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Enable</span>
                                </button>                    			
                                @else
                                @if($vehicle->units != 0)
                                <button class="btn btn-danger btn-icon-split btn-sm toggleStatus" data-toggle="modal" data-target="#toggleStatus" data-id="{{$vehicle->id}}" data-purpose="disable">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Disable</span>
                                </button>
                                @endif
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

<script>
let toggleBtns = document.querySelectorAll('.toggleStatus');

toggleBtns.forEach(function(toggleBtn){
    toggleBtn.addEventListener('click', function(){
        let id = toggleBtn.getAttribute('data-id');
        let form = document.querySelector('#toggleVehicleStatus');

        form.setAttribute('action', '/admin/vehicles/'+id);
    })
})

</script>

@endsection