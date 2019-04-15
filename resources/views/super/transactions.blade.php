@extends('layouts.sudo')



@section('sudo-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Vehicle Request Transactions</h1>
<p class="mb-4">All the requested vehicles are listed here, to easily manage the request, you may use the search box below. You can search by anything inside the table and it will show up automatically if there is a match.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
  		<h6 class="m-0 font-weight-bold text-primary">All Requests</h6>
	</div>
	<div class="card-body">
      	<div class="table-responsive">
        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          		<thead>
            		<tr>
	                    <th>Rer #</th>
	                    <th>Name</th>
	                    <th>Status</th>
	                    <th>Duration</th>
	                    <th>Vehicle</th>
	                    <th>Actions</th>
            		</tr>
          		</thead>
          		<tfoot>
            		<tr>
              			<th>Rer #</th>
              			<th>Name</th>
              			<th>Status</th>
              			<th>Duration</th>
              			<th>Vehicle</th>
              			<th>Actions</th>
            		</tr>
          		</tfoot>
          		<tbody>
                    @foreach($transactions as $transaction)
                    	<tr>
                    		<td>{{ $transaction->reference }}</td>
                    		<td>
                    			@foreach($users as $user)
                    				@if($user->id == $transaction->user_id)
                    					{{ $user->name }}
                    				@endif
                    			@endforeach
                    		</td>
                    		<td>
                    			@foreach($statuses as $status)
                    				@if($status->id == $transaction->vehicle_status_id)
                    					{{ $status->name }}
                    				@endif
                    			@endforeach
                    		</td>
                    		<td>{{ $transaction->from }} -  {{ $transaction->to }}</td>
                    		<td>
                    			<button class="btn btn-success btn-icon-split btn-sm">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-check"></i>
                    				</span>
                    				<span class="text">Assign Driver</span>
                    			</button>

                    			<button class="btn btn-success btn-icon-split btn-sm">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-check"></i>
                    				</span>
                    				<span class="text">Decline</span>
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

