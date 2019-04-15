@extends('layouts.agent')

@section('agent-content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Request Tripping Vehicle</h1>
<p class="mb-4">Please make sure that the information you indicate are accurate to avoid cancellation of the request. All fields are required.</p>

<!-- DataTales Example -->
<div class="row">
<div class="modal fade" tabindex="-1" role="dialog" id="requestVehicle">
<div class="modal-dialog" role="document">
    <div class="modal-content">        
        <form method="POST" action="/agent/transactions" class="user">
         @csrf
        <div class="modal-header py-3">
            <h6 class="m-0 font-weight-bold text-primary modal-title">Request Form</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">             
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
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>   
                </div>                  
            </div>  
        </div>
        <div class="modal-footer">
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
</div> 
<div class="col-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	  		<h6 class="m-0 font-weight-bold text-primary">Previous Transactions</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Previous Transaction:</div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Submit Vehicle Feedback</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Submit Driver Feedback</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#requestVehicle">Request a Vehicle</a>
            </div>
        </div>
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
                            <th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Ref #</th>
							<th>Client's Name</th>
							<th>Project Name</th>
							<th>Status</th>
                            <th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($transactions as $transaction)
							<tr>
							<td>{{$transaction->reference}}</td>
							<td>{{$transaction->client}}</td>
							<td>{{$transaction->project}}</td>
							<td>{{$transaction->status}}</td>
                            <td>
                                @if($transaction->status != 'Cancelled' && $transaction->status != 'Vehicle Deployed')
                                <a href="#" class="btn btn-primary btn-sm btn-icon-split editRequest" data-toggle="modal" data-target="#editRequest" data-id="{{ $transaction->id}}" data-client="{{ $transaction->client }}" data-project="{{ $transaction->project }}" data-from="{{ $transaction->from }}" data-pickup="{{ $transaction->origin}}" data-vehicle="{{ $transaction->vehicle_type_id }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>                                
                                <a href="#" class="btn btn-danger btn-sm btn-icon-split cancelRequest" data-toggle="modal" data-target="#cancelRequest" data-id="{{ $transaction->id}}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Cancel</span>
                                </a>
                                @elseif($transaction->status != 'Cancelled' && $transaction->status == 'Vehicle Deployed')
                                <a href="#" class="btn btn-info btn-sm btn-icon-split viewInfo" data-toggle="modal" data-target="#viewInfo" data-id="{{ $transaction->id}}" data-client="{{ $transaction->client }}" data-project="{{ $transaction->project }}" data-from="{{ $transaction->from }}" data-pickup="{{ $transaction->origin}}" data-vehicle="{{ $transaction->vehicle_type_id }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-car"></i>
                                    </span>
                                    <span class="text">Return Vehicle</span>
                                </a>                                 
                                @else
                                <a href="#" class="btn btn-secondary btn-sm btn-icon-split viewInfo" data-toggle="modal" data-target="#viewInfo" data-id="{{ $transaction->id}}" data-client="{{ $transaction->client }}" data-project="{{ $transaction->project }}" data-from="{{ $transaction->from }}" data-pickup="{{ $transaction->origin}}" data-vehicle="{{ $transaction->vehicle_type_id }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <span class="text">View Information</span>
                                </a>  

                                @endif
                            </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="cancelRequest">
    <div class="modal-dialog" role="document">
        <div class="modal-content">        
            <form method="post" class="user" id="cancelRequestForm">
                @csrf
                @method('delete')
                <div class="modal-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary modal-title">Confirmation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-3">             
                    <p>Are you sure you want to cancel this tripping request?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                        <span class="icon text-white-50">
                          <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary btn-icon-split">
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

<script type="text/javascript">
    let editButtons = document.querySelectorAll('.editButton');

    editButtons.forEach(function (editButton){
        editButton.addEventListener('click', function(){

            let editId = editButton.getAttribute('data-id');
            let name = editButton.getAttribute('data-name');
            let email = editButton.getAttribute('data-email');
            let role = editButton.getAttribute('data-role');

            document.querySelector('#editname').setAttribute('value', name);
            document.querySelector('#editemail').setAttribute('value', email);
            document.querySelector('#editrole').value = editButton.getAttribute('data-role');
            
            document.querySelector('#editUserForm').setAttribute('action', '/admin/users/' + editId);
        });
    });


    let cancelButtons = document.querySelectorAll('.cancelRequest');

    cancelButtons.forEach(function(cancelButton){

        let cancelId = cancelButton.getAttribute('data-id');

        cancelButton.addEventListener('click', function(){
            document.querySelector('#cancelRequestForm').setAttribute('action', '/agent/transactions/'+cancelId);
        });
    });
</script>
@endsection