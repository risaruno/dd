@include('remote/resources/resources')
<link rel="stylesheet" type="text/css" href="{{ asset('css/remote/login.css') }}">
<body>
		<div class="container-fluid text-center">
		  <div class="row align-items-center">
		  	<div class="card">
				<img class="card-img-top" src="{{ asset('images/icon/DD Korsel Green.png') }}" alt="Dompet Dhuafa Korea Selatan">
				<div class="card-body">
					
			    	<form action="{{ route('loginPost') }}" method="POST">
						{{ csrf_field() }}
			    		<div class="form-group">
							<p>@if(Session::has('error-login'))
								<div class="alert-danger">
									<div>{{ Session::get('error-login') }}</div>
									{{ Session::forget('error-login') }}
									{{ Session::save() }}
								</div>
							@endif</p>
							<p>@if(Session::has('success-logout'))
								<div class="alert-success">
									<div>{{ Session::get('success-logout') }}</div>
									{{ Session::forget('success-logout') }}
									{{ Session::save() }}
								</div>
							@endif</p>
				    		<p><input class="form-control" type="text" name="username" placeholder="Masukkan Username..." value="{{ session::get('username') }}" required></p>
							{{ session::forget('username') }}
							{{ session::save() }}
							<p><input class="form-control" type="password" name="password" placeholder="Masukkan Password..." required></p>
				    		<p><button class="btn btn-success">Login</button>
				    		</p>
			    		</div>
			    	</form>
				</div>
		    </div>
		  </div>
		</div>
</body>
</html>

<script>
	// var alert = document.getElementById('error-login');
	// if (alert) {
	// 	$("error-login").addClass('alert-danger')
	// }
	// console.log(alert);
</script>