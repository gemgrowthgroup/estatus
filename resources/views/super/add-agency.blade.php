@extends('layouts.sudo')



@section('sudo-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add Agency</h1>
{{-- <p class="mb-4">Please make sure that the category and the brand of the car model you are adding are listed. Otherwise, please add them first before adding a new car model.</p> --}}

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
  		<h6 class="m-0 font-weight-bold text-primary">Add Agency Form</h6>
	</div>
	<div class="card-body">		
      	<form method="POST" action="/agencies" class="user" enctype="multipart/form-data">
      		@csrf
      		<div class="row">
	      		<div class="col-md-6">
	      			<p class="mb-4">Please make sure all required information are complete and accurate to avoid misrepresentation of any form that may result to inconveniences.</p>
		      		<div class="form-group">		                
	                   	<input type="text" class="form-control" name="name" placeholder="Agency Name">
		            </div>		            
		            <div class="form-group">		                
	                   	<textarea name="about" class="form-control" placeholder="Something about the Agency..." rows="3"></textarea>
		            </div>	
		            
	            	<div class="form-group">	            		
        				<select name="type" class="custom-select">
	                   		<option value="sales">Sales Agency</option>
	                   		<option value="vehicle">Transport Agency</option>
	                   	</select>	            			
	            	</div>
		            
		            <div class="custom-file">
		            	<input type="file" name="image" class="custom-file-input" id="customFile">
		            	<label class="custom-file-label" for="customFile">Choose Logo</label>
		            </div>
	            </div>
	            <div class="col-md-6">
	            	<img src="{{ asset ('images/agencies/default.jpg') }}" class="img-fluid mb-3">
	            	<button type="submit" class="btn btn-primary btn-block">Submit</button>
	            </div>
            </div>


            
              
      	</form>
    </div>
</div> 


@endsection