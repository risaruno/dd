<?php echo $__env->make('remote/resources/resources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/remote/login.css')); ?>">
<body>
		<div class="container-fluid text-center">
		  <div class="row align-items-center">
		  	<div class="card">
				<img class="card-img-top" src="<?php echo e(asset('images/icon/DD Korsel Green.png')); ?>" alt="Dompet Dhuafa Korea Selatan">
				<div class="card-body">
					
			    	<form action="<?php echo e(route('loginPost')); ?>" method="POST">
						<?php echo e(csrf_field()); ?>

			    		<div class="form-group">
							<p><?php if(Session::has('error-login')): ?>
								<div class="alert-danger">
									<div><?php echo e(Session::get('error-login')); ?></div>
									<?php echo e(Session::forget('error-login')); ?>

									<?php echo e(Session::save()); ?>

								</div>
							<?php endif; ?></p>
							<p><?php if(Session::has('success-logout')): ?>
								<div class="alert-success">
									<div><?php echo e(Session::get('success-logout')); ?></div>
									<?php echo e(Session::forget('success-logout')); ?>

									<?php echo e(Session::save()); ?>

								</div>
							<?php endif; ?></p>
				    		<p><input class="form-control" type="text" name="username" placeholder="Masukkan Username..." value="<?php echo e(session::get('username')); ?>" required></p>
							<?php echo e(session::forget('username')); ?>

							<?php echo e(session::save()); ?>

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
</script><?php /**PATH /opt/lampp/htdocs/laravel/local/resources/views/remote/login.blade.php ENDPATH**/ ?>