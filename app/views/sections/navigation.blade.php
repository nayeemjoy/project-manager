<nav class="navbar navbar-fixed-top navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <img src="{{URL::asset('resource/logo_1_1_2.png')}}"><br>
	      <h3>Project Management</h3>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	@if(Auth::check())
	      		<li><h3>Welcome, Admin</h3></li>
	      	@else
	      		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	        @endif
	      </ul>
	    </div>
	  </div>
</nav>