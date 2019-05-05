@extends('layouts.app')



@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add New Vehicles</h1>
<p class="mb-4">Please make sure that the category, the model, and the brand of the vehicle you are adding are listed. Otherwise, please add them first before adding a new vehicle.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
  		<h6 class="m-0 font-weight-bold text-primary">Add Vehicle Form</h6>
	</div>
	<div class="card-body">		
      	<form method="POST" action="/vehicles" class="user">
      		@csrf
      		<div class="row">
	      		<div class="col-md-6">
	      			<p class="mb-4">Please make sure all required information are complete and accurate to avoid misrepresentation of any form that may result to inconveniences.</p>
		      		<div class="form-group">		                
	                   	<input type="text" class="form-control" name="name" placeholder="Vehicle Name">
		            </div>

		            <div class="form-group">
		            	<input type="text" class="form-control" name="plate" placeholder="Plate Number (no spaces please)">
		            </div>

		            <div class="form-group row">
		            	<div class="col-sm-6 mb-3 mb-sm-0">
		            		<select name="driver" class="custom-select">
		                    	<option selected>Select Default Driver</option>
		                   		@foreach($drivers as $driver)
		                   			<option value="{{ $driver->id }}">{{ $driver->name }}</option>
		                   		@endforeach
		                   	</select> 
		            	</div>
		                <div class="col-sm-6">
		                    <select name="category" class="custom-select">
		                   		@foreach($categories as $category)
		                   			<option value="{{ $category->id }}">{{ $category->name }}</option>
		                   		@endforeach
		                   	</select>
		                </div>
		            </div>

		            <div class="form-group row">
		                <div class="col-sm-6 mb-3 mb-sm-0">
		                	<select name="brand" class="custom-select">
		                   		@foreach($brands as $brand)
		                   			<option value="{{ $brand->id }}">{{ $brand->name }}</option>
		                   		@endforeach
		                   	</select>             	
		                </div>
		                <div class="col-sm-6">
		                	<select name="model" class="custom-select">
		                   		@foreach($models as $model)
		                   			<option value="{{ $model->id }}">{{ $model->name }}</option>
		                   		@endforeach
		                   	</select>                    
		                </div>
		            </div>

		            <div class="custom-file">
		            	<input type="file" name="image" class="custom-file-input" id="customFile">
		            	<label class="custom-file-label" for="customFile">Choose file</label>
		            </div>
	            </div>
	            <div class="col-md-6">
	            	<img src="{{ asset ('images/vehicles/default.png') }}" class="img-fluid">
	            	<button type="submit" class="btn btn-primary btn-block">Submit</button>
	            </div>
            </div>


            
              
      	</form>
    </div>
</div> 


@endsection