<?php $__env->startSection('content'); ?>
<div class="page-title">
	<img src="<?php echo e(asset('images/title/title.png')); ?>" alt="Donation">
	<h1 id="title" class="title">Donation</h1>
</div>
<div class="donate">
	<div class="container-fluid text-center">
		<div class="col-donate">
			<p><h2>Send your donation to :</h2></p>
			<div class="row justify-content-center">
				<div class=".col-6 .col-sm-3">
					<p><img src="<?php echo e(asset('images/icon/keb-hana.png')); ?>" alt="KEB Hana Bank" style="width: 250px"></p>
				</div>
				<div class=".col-6 .col-sm-3">
					<h4>346 910019 81004 - Infaq</h4>
					<h4>346 910020 27404 - Zakat</h4>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class=".col">
					<h4>Account Name : Dompet Dhuafa Korsel</h4>
				</div>
			</div>
			<a href="#" class="btn btn-success" style="font-size: 30px; margin: 20px;">Confirm Your Donation</a>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('/web/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel/local/resources/views/web/content/donate.blade.php ENDPATH**/ ?>