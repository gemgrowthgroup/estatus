@extends('layouts.app')

@section('title', 'All Transactions | E-Status Real Estate Asset Management')

@section('content')

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Pending Transactions</h6>
            </div>
            <div class="card-body"> 
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Ref #</th>
                                <th>Requested By</th>
                                <th>Client</th>
                                <th>Project</th>
                                <th>Date Needed</th>
                                <th>Requested</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Ref #</th>
                                <th>Requested By</th>
                                <th>Client</th>
                                <th>Project</th>
                                <th>Date Needed</th>
                                <th>Requested</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    <tbody>
                        @foreach($transactions as $transaction)
                            @if($transaction->status_id == 1)
                                <tr>
                                    <td>{{$transaction->reference}}</td>
                                    <td>{{$transaction->requested_by}}</td>
                                    <td>{{$transaction->client}}</td>
                                    <td>{{$transaction->project}}</td>
                                    <td>{{$transaction->from}}</td>
                                    <td>
                                        @foreach($types as $type)
                                            @if($transaction->vehicle_type_id == $type->id)
                                                {{$type->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>                                    
                                        <a href="/director/transactions/{{$transaction->id}}/edit" class="btn btn-primary btn-sm btn-icon-split approveButton">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info"></i>
                                            </span>
                                            <span class="text">Details</span>
                                        </a>                                     
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="approveRequest">
    <div class="modal-dialog" role="document">
        <div class="modal-content">        
            <form method="post" class="user" id="approveRequestForm">
                @csrf
                @method('patch')
                <div class="modal-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary modal-title">Approve Request</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-3">
                    <input type="text" name="type" value="approval" class="d-none">
                    <p>You are approving this vehicle request with the following information.</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Request By</span>
                        </div>
                        <input id="approveRequestName" type="name" class="form-control" name="email" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Vehicle Type</span>
                        </div>
                        <select id="approveVehicleType" class="custom-select" name="type" disabled>
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>                        
                    </div>          
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Select Vehicle</span>
                        </div>
                        <select name="vehicle" class="custom-select" id="assignVehicle">
                            @foreach($vehicles as $vehicle)                                
                                <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
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
 
            
<div class="modal fade" tabindex="-1" role="dialog" id="declineRequest">
    <div class="modal-dialog" role="document">
        <div class="modal-content">        
            <form method="post" class="user" id="declineRequestForm">
                @csrf
                @method('delete')
                <div class="modal-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary modal-title">Confirmation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-3">
                    <div class="text-center">
                        <span class="text-warning decline-warning"><i class="fas fa-exclamation-triangle"></i></span>                                
                        <p id="confirmMessage"></p>
                    </div>
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

<div class="modal fade" tabindex="-1" role="dialog" id="deployVehicleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">        
            <form method="post" class="user" id="deployVehicleForm">
                @csrf
                @method('patch')
                <div class="modal-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary modal-title">Confirmation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-3">  
                    <input type="text" name="type" value="deployment" class="d-none">            
                    <p id="deployMessage"></p>
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

   

    

@endsection