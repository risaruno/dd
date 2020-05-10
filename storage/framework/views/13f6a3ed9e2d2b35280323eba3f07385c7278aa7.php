<?php $__env->startSection('content'); ?>
<div class="page-title">
	<img src="<?php echo e(asset('images/title/title.png')); ?>" alt="News">
	<h1 id="title" class="title">News</h1>
</div>
<div class="thread">
	<div class="container-fluid">
		<div class="row row-th">
			<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="card-group">
				<div class="card img">
					<img src="<?php echo e(asset($n->img)); ?>" class="card-img" alt="<?php echo e($n->title); ?>">
					<div class="date-text"><?php echo e($n->updated_at); ?></div>
				</div>
				<div class="card">
					<div class="card-body body-news">
						<h5 class="card-title"><?php echo e($n->title); ?></h5>
						<p class="card-text"><?php echo \Illuminate\Support\Str::limit($n->text, $limit=250,$end="..."); ?></p>
						<p class="button-right"><a href="<?php echo e(route('news')); ?>/<?php echo e($n->id); ?>" class="btn btn-success">See Details ></a></p>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<div class="more">
				<a href="#"><h3 class="list-group-item">Load More <i class="fa fa-caret-down"></i></h3></a>
			</div>
		</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/web/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel6/resources/views/web/content/news.blade.php ENDPATH**/ ?>