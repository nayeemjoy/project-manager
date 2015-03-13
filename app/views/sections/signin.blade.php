<form action="{{URL::to('/login')}}" method="POST" role="form" id="login">
	<div class="form-group"><h2>LogIn</h2>
	<label for="username">Username</label>
	<input name="username" type="text" class="form-control" placeholder="enter your name">
	</div>
	<div class="form-group">
	<label for="password">Password</label>
	<input name="password" type="password" class="form-control" placeholder="enter password">
	</div>

	<button type="submit" class="btn btn-primary btn-block">Login</button>
	<button type="submit" id="signup" class="btn btn-primary btn-block">Sign Up</button>
	@if(Input::get('error') == 2)
  		<div class="alert alert-danger" role="alert">
  			@foreach($errors->all() as $messages)
	  			<p class="text-warning">{{$messages}}</p>
	  		@endforeach
  		</div>
	@endif
</form>