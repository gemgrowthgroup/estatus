@extends('layouts.admin')


@section('admin-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">All Car Brands</h1>
<p class="mb-4">All the approved car brands are listed here, if not, please <a href="/brands/create">add car brand</a>. To easily manage the car brands, you may use the search box below. You can search by anything inside the table and it will show up automatically if there is a match.</p>

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
	                    <th>ID</th>
	                    <th>Brand</th>
	                    <th>Logo</th>
	                    <th>Actions</th>
            		</tr>
          		</thead>
          		<tfoot>
            		<tr>	                    
	                    <th>ID</th>
	                    <th>Brand</th>
	                    <th>Logo</th>
	                    <th>Actions</th>
            		</tr>
          		</tfoot>
          		<tbody>
                    @foreach($brands as $brand)
                    	<tr>                    		
                    		<td>{{ $brand->id }}</td>
                    		<td>{{ $brand->name }}</td>
                    		<td>
                    			@if($brand->logo == '' || $brand->logo == null)
                    				<img src="{{ asset ('images/brands/1554979867.jpg') }}" class="img-fluid">
                    			@else
                    				<img src="{{ asset ($brand->logo) }}" class="img-fluid" width="100px" alt="logo of {{ $brand->name }}">
                    			@endif
                    		</td>
                    		
                    		<td>
                    			<button class="btn btn-primary btn-icon-split btn-sm">
                    				<span class="icon text-white-50">
                    					<i class="fas fa-edit"></i>
                    				</span>
                    				<span class="text">Edit</span>
                    			</button>

                    			<button class="btn btn-danger btn-icon-split btn-sm">
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