<?php $__env->startSection('menu'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/remote/styles.css')); ?>">
	<div id="main" class="main">
		<div class="container-fluid">
			<h2>Sidebar Dropdown</h2>
			<h1>Hallo <?php echo e(Session::get('name')); ?></h1>
			<a href="<?php echo e(route('logout')); ?>">logout</a>
			<p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
			<p>This sidebar is of full height (100%) and always shown.</p>
			<p>Some random text..</p>
			<p id="error"></p>
		</div>
	</div>
	
<script type="text/javascript" src="<?php echo e(asset('js/remote/menu.js')); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('remote/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dd\local\resources\views/remote/home.blade.php ENDPATH**/ ?>