@extends('layouts.super')



@section('sudo-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Agencies</h1>
<p class="mb-4">All the created agencies are listed here, to easily manage the request, you may use the search box below. You can search by anything inside the table and it will show up automatically if there is a match.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Entries</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($agencies as $agency)
                        <tr>
                            <td>{{ $agency->name }}</td>
                            <td>{{ $agency->address }}</td>
                            <td>{{ $agency->phone }}</td>
                            <td>{{ $agency->email }}</td>
                            <td>{{ $agency->website }}</td>
                            <td>
                                <button class="btn btn-primary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </button>

                                <button class="btn btn-warning btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
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

