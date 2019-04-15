@extends('layouts.agent')


@section('agent-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">All Vehicles</h1>
<p class="mb-4">All the approved vehicles are listed here, if not, please message the admin to request for additional vehicle. You may use the search box below. You can search by anything inside the table and it will show up automatically if there is a match.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  		<h6 class="m-0 font-weight-bold text-primary">All Entries</h6>      
	</div>
	<div class="card-body">
      	<div class="table-responsive">
        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          		<thead>
            		<tr>
                        <th>Vehicle</th>
                        <th>Type</th>
                        <th>Description</th>
            		</tr>
          		</thead>
          		<tfoot>
            		<tr>
            			<th>Vehicle</th>
                        <th>Type</th>
                        <th>Description</th>
            		</tr>
          		</tfoot>
          		<tbody>
                    @foreach($vehicles as $vehicle)
                        @if($vehicle->status == 'enabled')
                        	<tr>
                        		<td>{{ $vehicle->name }}</td>
                        		<td>
                                    @foreach($types as $type)
                                        @if($vehicle->vehicle_type_id == $type->id)
                                            {{ $type->name }}
                                        @endif
                                    @endforeach      
                                </td>        
                                <td>{{ $vehicle->description }}</td>            		
                        	</tr>
                        @endif
                    @endforeach
          		</tbody>
        	</table>
      	</div>
    </div>
</div> 

@endsection