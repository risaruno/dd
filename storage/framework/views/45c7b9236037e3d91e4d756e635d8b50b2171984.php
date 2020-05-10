<?php $__env->startSection('menu'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/remote/styles.css')); ?>">
	<div id="main" class="main">
		<div class="container-fluid">
			<h1 class="title">Dashboard</h1>
			<p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
			<p>This sidebar is of full height (100%) and always shown.</p>
			<p>Some random text..</p>
			<p id="error"></p>
		</div>
	</div>
	
<script type="text/javascript" src="<?php echo e(asset('js/remote/menu.js')); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('remote/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel/local/resources/views/remote/menu/home.blade.php ENDPATH**/ ?>