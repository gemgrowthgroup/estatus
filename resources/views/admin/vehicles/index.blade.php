@extends('layouts.admin')


@section('admin-content')

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
                {{-- <div class="dropdown-header">Assign Users:</div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createAdmin">Create Admin</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createDirector">Create Director</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createManager">Create Manager</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createAgent">Create Agent</a>
                <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerUser">Add Vehicle</a>
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
                    			<button class="btn btn-success btn-icon-split btn-sm">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-edit"></i>
                    				</span>
                    				<span class="text">Edit</span>
                    			</button>

                    			<button class="btn btn-danger btn-icon-split btn-sm">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-times"></i>
                    				</span>
                    				<span class="text">Disable</span>
                    			</button>
                    		</td>
                    	</tr>
                    @endforeach
          		</tbody>
        	</table>
      	</div>
    </div>
</div> 

@endsection