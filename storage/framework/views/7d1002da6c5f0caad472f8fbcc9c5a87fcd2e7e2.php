<?php $__env->startSection('content'); ?>
<div class="thread">
	<div class="container-fluid">
		<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row">
            <h1 id="title" class="thread-title"><?php echo e($n->title); ?></h1>
			<span class="thread-date"><?php echo e($n->updated_at); ?></span>
		    <img class="thread-img" src="<?php echo e(asset($n->img)); ?>" class="card-img" alt="<?php echo e($n->title); ?>">
			<div class="thread-text"><?php echo $n->text; ?></div>			
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/web/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel/local/resources/views/web/content/thread.blade.php ENDPATH**/ ?>