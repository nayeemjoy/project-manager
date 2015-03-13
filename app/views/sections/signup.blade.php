<form action="{{URL::to('/signup')}}" method="POST" role="form" id="signup">
	<h2>Sign Up</h2>
	<div class="form-group">
		<label for="email">E-mail</label>
		<input name="email" type="text" class="form-control" placeholder="enter your email">
		</div>
		<div class="form-group">
		<label for="username">Username</label>
		<input name="username" type="text" class="form-control" placeholder="enter your name">
		</div>
		<div class="form-group">
		<label for="password">Password</label>
		<input name="password" type="password" class="form-control" placeholder="enter password">
		</div>
		<div class="form-group">
		<label for="password">Confirm Password</label>
		<input name="password_confirmation" type="password" class="form-control" placeholder="enter password again">
		</div>

		<button type="submit" class="btn btn-primary btn-block">Submit</button>
		@if(Input::get('error') == 1)
  		<div class="alert alert-danger" role="alert">
  			@foreach($errors->all() as $messages)
	  			<p class="text-warning">{{$messages}}</p>
	  		@endforeach
  		</div>
		@endif
</form>