@extends('masterpages.default')

@section('body')

	@include('sections.navigation')
	
	<div class="container">
		<div class="row">
				<div class="col-md-4"></div>
				
				<!-- sign up and login -->

				<div class="col-md-4">

					@include('sections.signup')
					@include('sections.signin')
					
				</div>

				<!-- end of sign up and login -->

				<div class="col-md-4"></div>
		</div>
	</div>
@stop

@section('script')
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{URL::asset('resource/js/bootstrap.min.js')}}"></script>
    <script>
    	$(document).ready(function(){
		    $("form").hide();
		    @if(Input::get('error') == 1)
		    	$("form#signup").fadeIn(1000);
		    @elseif(Input::get('error') == 2)
		    	$("form#login").fadeIn(1000);
		    @endif
		   
		    $("ul.navbar-right li a").first().click(function(){
		    	$("form#login").hide();
		    	$("form#signup").fadeIn(1000);
		    });
		    $("ul.navbar-right li a").last().click(function(){
		    	$("form#signup").hide();
		    	$("form#login").fadeIn(1000);
		    });
		    $("button#signup").click(function(){
		    	$("form#login").hide();
		    	$("form#signup").fadeIn(1000);
		    	return false;
		    });
		});
    </script>
@stop