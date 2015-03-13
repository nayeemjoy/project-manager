		
@extends('masterpages.default')

@section('body')

	@include('sections.navigation')
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<button class="btn btn-default btn-lg btn-block">Existing Company <span class="glyphicon glyphicon-arrow-down"></span></button>
			<br> <br> <br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					 <div class="list-group">
				 		@foreach($companies as $company)
					  	<a href="#" class="list-group-item">{{ htmlentities($company->company_name) }}</a>
					  	@endforeach
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>

		<!-- end of Company List -->


		<!-- Add Company -->

		<div class="col-md-6">
			<button id="add" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-plus"></span> Add Company</button>
			<br> <br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="{{URL::to('/createcompany')}}" method="POST" role="form">
						<div class="form-group">
				    		<label for="company_name">Company Name</label>
				    		<input name="company_name" type="text" class="form-control" placeholder="enter company name">
				  		</div>
				  		<div class="form-group">
				    		<label for="details">Company Details</label>
				    		<textarea name="company_detail" class="form-control" placeholder="enter details of the company" rows = "7" id="detail"></textarea>
				  		</div>
				  		<button type="submit" class="btn btn-primary btn-block">Submit</button>
				  		<button id="close" class="btn btn-primary btn-block">Close</button>
				  		@if(Input::get('error') == 1)
					  		<div class="alert alert-danger" role="alert">
					  			@foreach($errors->all() as $messages)
						  			<p class="text-warning">{{$messages}}</p>
						  		@endforeach
					  		</div>
						@endif
					</form>		
				</div>
				<div class="col-md-2"></div>
			</div>			
		</div>	
		</div>
	</div>
@stop

@section('script')
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{URL::asset('resource/js/bootstrap.min.js')}}"></script>
    <script>
    	$(document).ready(function(){
    		$("form").hide();
		    $("button#add").click(function(){
		    	$("form").slideDown(500);
		    });
		    $("button#close").click(function(){
		    	$("form").slideUp(500);
		    	return false; 
		    });
		    @if(Input::get('error') == 1)
		    	$("form").show();
		    @endif
		});
    </script>
@stop