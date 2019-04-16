@extends('layouts.admin')


@section('admin-content')
<!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Registered Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Total: 
                                    {{$users->count()}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Vehicle Types</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Total: {{$vehicles->count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-car fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            @if($transactions->where('status', 'Pending Approval')->count() <= 3)
                                90%
                            @elseif ($transactions->where('status', 'Pending Approval')->count() <= 10)
                                70%
                            @elseif ($transactions->where('status', 'Pending Approval')->count() <= 20)
                                50%
                            @else
                              10%
                            @endif
                          </div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            @if($transactions->where('status', 'Pending Approval')->count() <= 3)
                                <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            @elseif ($transactions->where('status', 'Pending Approval')->count() <= 10)
                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            @elseif ($transactions->where('status', 'Pending Approval')->count() <= 20)
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            @else
                              <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            @endif
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Total: 
                        {{$transactions->where('status', 'Pending Approval')->count()}}
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Transactions</h6>
                </div>
                <div class="card-body"> 
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Ref #</th>
                          <th>Requested By</th>
                          <th>Date Needed</th>
                          <th>Vehicle Type</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Ref #</th>
                          <th>Requested By</th>
                          <th>Date Needed</th>
                          <th>Vehicle Type</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach($transactions as $transaction)
                          <tr>
                            <td>{{$transaction->reference}}</td>
                            <td>{{$transaction->requested_by}}</td>
                            <td>{{$transaction->from}}</td>
                            <td>
                                @foreach($types as $type)
                                    @if($transaction->vehicle_type_id == $type->id)
                                        {{$type->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$transaction->status}}</td>
                            <td>
                                @switch($transaction->status)
                                    @case('Pending Approval')
                                        <a href="#" class="btn btn-primary btn-sm btn-icon-split assignButton" data-toggle="modal" data-target="#assignVehicleModal" data-id="{{$transaction->id}}" data-name="{{$transaction->requested_by}}" data-vehicle="{{$transaction->vehicle_type_id}}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-car"></i>
                                            </span>
                                            <span class="text">Assign Vehicle</span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm btn-icon-split declineButton" data-toggle="modal" data-target="#declineRequest" data-id="{{$transaction->id}}" data-name="{{$transaction->requested_by}}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-car"></i>
                                            </span>
                                            <span class="text">Decline</span>
                                        </a>
                                    @break

                                    @case('Approved for Deployment')
                                        <a href="#" class="btn btn-success btn-sm btn-icon-split deployButton" data-toggle="modal" data-target="#deployVehicleModal" data-id="{{$transaction->id}}" data-name="{{$transaction->requested_by}}" data-vehicle="{{$transaction->vehicle_id}}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-car"></i>
                                            </span>
                                            <span class="text">Deploy Vehicle</span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm btn-icon-split cancelButton" data-toggle="modal" data-target="#cancelRequest" data-id="{{$transaction->id}}" data-name="{{$transaction->requested_by}}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-car"></i>
                                            </span>
                                            <span class="text">Cancel</span>
                                        </a>
                                    @break

                                    @case('Vehicle Returned')
                                        <a href="#" class="btn btn-primary btn-sm btn-icon-split completeButton" data-toggle="modal" data-target="#completeModal" data-id="{{$transaction->id}}" data-name="{{$transaction->requested_by}}" data-vehicle="{{$transaction->vehicle_type_id}}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-car"></i>
                                            </span>
                                            <span class="text">Mark as Completed</span>
                                        </a>                                        
                                    @break

                                    @default
                                        <a href="#" class="btn btn-info btn-sm btn-icon-split detailsButton" data-toggle="modal" data-target="#detailsModal" data-id="{{$transaction->id}}" data-name="{{$transaction->requested_by}}" data-vehicle="{{$transaction->vehicle_type_id}}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-car"></i>
                                            </span>
                                            <span class="text">View Details</span>
                                        </a>
                                    @break
                                @endswitch
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<div class="modal fade" tabindex="-1" role="dialog" id="assignVehicleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">        
            <form method="post" class="user" id="assignVehicleForm">
                @csrf
                @method('patch')
                <div class="modal-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary modal-title">Assign Vehicle</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-3">
                    <input type="text" name="type" value="approval" class="d-none">
                    <p>You are assigning a vehicle to this request with the following information.</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Request By</span>
                        </div>
                        <input id="assignVehicleName" type="name" class="form-control" name="email" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width:35%">
                            <span class="input-group-text bg-primary text-white" style="width:100%">Vehicle Type</span>
                        </div>
                        <select id="assignVehicleType" class="custom-select" name="type" disabled>
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
                    <p id="confirmMessage"></p>
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

    <script type="text/javascript">
        let assignButtons = document.querySelectorAll('.assignButton');

        assignButtons.forEach(function(assignButton){
            let assignID = assignButton.getAttribute('data-id');
            let assignName = assignButton.getAttribute('data-name');
            let vehicleType = assignButton.getAttribute('data-vehicle');

            assignButton.addEventListener('click', function(){
                document.querySelector('#assignVehicleForm').setAttribute('action', '/admin/transactions/'+assignID);
                document.querySelector('#assignVehicleName').value = assignName;
                document.querySelector('#assignVehicleType').value = vehicleType;


            });

        });


        let declineButtons = document.querySelectorAll('.declineButton');

        declineButtons.forEach(function(declineButton){

            declineButton.addEventListener('click', function(){

            let declineID = declineButton.getAttribute('data-id');
            let requester = declineButton.getAttribute('data-name');

                document.querySelector('#confirmMessage').innerHTML = 'Are you sure you want to decline this vehicle request of ' + requester + '?';
                document.querySelector('#declineRequestForm').setAttribute('action', '/admin/transactions/'+declineID);
            });
        });



        let deployButtons = document.querySelectorAll('.deployButton');

        deployButtons.forEach(function(deployButton){
            deployButton.addEventListener('click', function(){
              let deployID = deployButton.getAttribute('data-id');
              let requester = deployButton.getAttribute('data-name');

                document.querySelector('#deployMessage').innerHTML = 'Click the "Confirm" button to deploy the vehicle requested by ' + requester + '.';
                document.querySelector('#deployVehicleForm').setAttribute('action', '/admin/transactions/'+deployID);
            });
        });
    </script>   


    <script src="{{ asset('js/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
    
@endsection