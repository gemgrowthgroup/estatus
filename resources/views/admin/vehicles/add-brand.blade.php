@extends('layouts.admin')



@section('admin-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add New Car Brand</h1>
<p class="mb-4">Create Car Brands so you can attach categories, car models and vehicles to it. This is the first step if you are looking to add a vehicle that doesn't have a car brand listed.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
  		<h6 class="m-0 font-weight-bold text-primary">Add Car Brand Form</h6>
	</div>
	<div class="card-body">		
      	<form method="POST" action="/vehicles" class="user">
      		@csrf
      		<div class="row">
	      		<div class="col-md-6">
	      			<p class="mb-4">Please make sure all required information are complete and accurate to avoid misrepresentation of any form that may result to inconveniences.</p>

	      			<img src="{{ asset ('images/brands/1554979948.jpg') }}" class="img-fluid mb-1">

		            <div class="form-group row">
		            	<div class="col-sm-6">
		            		<input type="text" class="form-control" name="name" placeholder="Car Brand Name">
		            	</div>
		            	<div class="col-sm-6">
		            		<div class="custom-file">
				            	<input type="file" name="image" class="custom-file-input" id="customFile">
				            	<label class="custom-file-label" for="customFile">Choose Logo</label>
				            </div>
		            	</div>		            	
		            </div>
		            
	            </div>
	            <div class="col-md-6">
	            	<img src="{{ asset ('images/vehicles/default.png') }}" class="img-fluid mb-2">
	            	<button type="submit" class="btn btn-primary btn-block">Submit</button>
	            </div>
            </div>


            
              
      	</form>
    </div>
</div> 


@endsection