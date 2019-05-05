@extends('layouts.app')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><img src="{{ asset($agency->logo) }}" width="120px">  {{ $agency->name }} Dashboard</h1>
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
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Employees</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total: 
                            {{$employees->count()}}
                        </div>
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
                                    @if($transactions->where('status_id', 1)->count() <= 3)
                                            90%
                                    @elseif ($transactions->where('status_id', 1)->count() <= 10)
                                            70%
                                    @elseif ($transactions->where('status_id', 1)->count() <= 20)
                                            50%
                                    @else
                                            10%
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    @if($transactions->where('status_id', 1)->count() <= 3)
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    @elseif ($transactions->where('status_id', 1)->count() <= 10)
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    @elseif ($transactions->where('status_id', 1)->count() <= 20)
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
                            {{$transactions->where('status_id', 1)->count()}}
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
                                    <th>Date Created</th>
                                    <th>Last Update</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Ref #</th>
                                    <th>Requested By</th>
                                    <th>Date Created</th>
                                    <th>Last Update</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                        <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td><a href="/director/transactions/{{$transaction->id}}/">{{$transaction->reference}}</a></td>
                                    <td>{{$transaction->requested_by}}</td>
                                    <td>{{$transaction->created_at->format('d-M-Y h:ia')}}</td>
                                    <td>{{$transaction->updated_at->format('d-M-Y h:ia')}}</td>
                                    <td>
                                        @foreach($statuses as $status)
                                            @if($status->id == $transaction->status_id)
                                                {{$status->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('js/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
    
@endsection