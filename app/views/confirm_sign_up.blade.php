@extends('masterpages.default')

@section('body')

	@include('sections.navigation')

	<div class="container">
		<div class="row">
				<div class="col-md-4"></div>
				
				<!-- sign up and login -->

				<div class="col-md-4">
					<h2>You Have Successfully Signed Up. Now you can log in.</h2>
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
		    $("ul.navbar-right li a").first().click(function(){
		    	$("h2").hide();
		    	$("form#login").hide();
		    	$("form#signup").fadeIn(1000);
		    });
		    $("ul.navbar-right li a").last().click(function(){
		    	$("h2").hide();
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