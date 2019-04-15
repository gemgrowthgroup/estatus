@extends('layouts.agent')

@section('agent-content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Request Tripping Vehicle</h1>
<p class="mb-4">Please make sure that the information you indicate are accurate to avoid cancellation of the request. All fields are required.</p>

<!-- DataTales Example -->
<div class="row">
<div class="col-md-4">
<div class="card shadow mb-4">
	<form method="POST" action="/agent/transactions" class="user">
     @csrf
	<div class="card-header py-3">
  		<h6 class="m-0 font-weight-bold text-primary">Request Form</h6>
	</div>
	<div class="card-body">	      		
		<p class="mb-4">Please make sure all required information are complete and accurate to avoid misrepresentation of any form that may result to inconveniences.</p>
  		<div class="form-group">	
  			<div class="input-group mb-3">
                <div class="input-group-prepend" style="width:35%">
                    <span class="input-group-text bg-primary text-white" style="width:100%">From</span>
                </div>
                <input id="from" type="date" class="form-control" name="from" required autofocus>	
            </div>  			
        </div>
        	            
        <div class="form-group">		                
           	<div class="input-group mb-3">
                <div class="input-group-prepend" style="width:35%">
                    <span class="input-group-text bg-primary text-white" style="width:100%">Client</span>
                </div>
                <input id="client" type="text" class="form-control" name="client" required autofocus>
            </div>
        </div>
        <div class="form-group">		                
           	<div class="input-group mb-3">
                <div class="input-group-prepend" style="width:35%">
                    <span class="input-group-text bg-primary text-white" style="width:100%">Project</span>
                </div>
                <input id="project" type="text" class="form-control" name="project" required autofocus>
            </div>
        </div>
        <div class="form-group">		                
           	<div class="input-group mb-3">
                <div class="input-group-prepend" style="width:35%">
                    <span class="input-group-text bg-primary text-white" style="width:100%">Pick-up</span>
                </div>
                <input id="origin" type="text" class="form-control" name="origin" required autofocus>
            </div>
        </div>
    	<div class="form-group">
    		<div class="input-group mb-3">
                <div class="input-group-prepend" style="width:35%">
                    <span class="input-group-text bg-primary text-white" style="width:100%">Vehicle</span>
                </div>
                <select name="vehicle_type" class="custom-select">
               		<option value="Shuttle Van">Shuttle Van</option>
               		<option value="Sports Utility Vehicle">Sports Utility (SUV)</option>
               	</select>	
            </div>	     			
    	</div>  
    </div>
    <div class="card-footer">
		<button type="submit" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-check"></i>
            </span>
            <span class="text">Submit Request</span>
        </button>
	</div> 
    </form>
</div>
</div> 
<div class="col-md-8">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	  		<h6 class="m-0 font-weight-bold text-primary">Previous Transactions</h6>
		</div>
		<div class="card-body">	
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Ref #</th>
							<th>Client's Name</th>
							<th>Project Name</th>
							<th>Status</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Ref #</th>
							<th>Client's Name</th>
							<th>Project Name</th>
							<th>Status</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($transactions as $transaction)
							<tr>
							<td>{{$transaction->id}}</td>
							<td>{{$transaction->client}}</td>
							<td>{{$transaction->project}}</td>
							<td>{{$transaction->status}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
@endsection