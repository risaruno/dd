<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/slider.css')); ?>">
<div class="slideshow">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="" data-slide-to="<?php echo e($s->id); ?>" class="carousel-ind"></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="carousel-inner">
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item">
                    <img src="<?php echo e(asset($s->img)); ?>" alt="<?php echo e($s->title); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
</div>
<script>
$(document).ready(function(){
    $(".carousel-item:first-child").addClass("active");
    $(".carousel-ind:first-child").addClass("active");
});
</script>
<div class="program">
    <div class="container-fluid text-center">
        <h2 class="display">Programs</h2><hr>
        <div class="row row-th">
            <div class="coll">
                <ul class="list-group">
                    <i class="fa fa-graduation-cap fa-lg" style="font-size: 50px; color: #00B354; "></i>
                </ul>
                <ul class="list-group">
                    <h3>Education</h3>
                </ul>
                <ul class="list-group">
                    <span>Dompet Dhuafa is committed to providing the widest possible access to education for the poor.</span>
                </ul>
                <ul class="list-group card-details">
                    <a href="#"><li class="list-group-item">Read More</li></a>
                </ul>
            </div>
            <div class="coll">
                <ul class="list-group">
                    <i class="fa fa-heartbeat fa-lg" style="font-size: 50px; color: #00B354;"></i>
                </ul>
                <ul class="list-group">
                    <h3>Health Care</h3>
                </ul>
                <ul class="list-group">
                    <span>With the concept of productive endowments, Dompet Dhuafa opens access to the overall health of Indonesia.</span>
                </ul>
                <ul class="list-group card-details">
                    <a href="#"><li class="list-group-item">Read More</li></a>
                </ul>
            </div>
            <div class="coll">
                <ul class="list-group">
                    <i class="fa fa-line-chart fa-lg" style="font-size: 50px; color: #00B354;"></i>
                </ul>
                <ul class="list-group">
                    <h3>Economy</h3>
                </ul>
                <ul class="list-group">
                    <span>Dompet Dhuafa empowers local potential-based communities to encourage the independence of the people.</span>
                </ul>
                <ul class="list-group card-details">
                    <a href="#"><li class="list-group-item">Read More</li></a>
                </ul>
            </div>
            <div class="coll">
                <ul class="list-group">
                    <i class="fa fa-users fa-lg" style="font-size: 50px; color: #00B354;"></i>
                </ul>
                <ul class="list-group">
                    <h3>Social</h3>
                </ul>
                <ul class="list-group">
                    <span>Dompet Dhuafa responds quickly to community problems in accordance with their needs.</span>
                </ul>
                <ul class="list-group card-details">
                    <a href="#"><li class="list-group-item">Read More</li></a>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="thread">
    <div class="container-fluid">
        <h2 class="display">News</h2><hr>
        <div class="row row-th">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card news">
                <img src="<?php echo e(asset($n->img)); ?>" class="card-img-top" alt="<?php echo e($n->title); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($n->title); ?></h5>
                    <p class="card-text text-right"><small class="text-muted"><?php echo e($n->updated_at); ?></small></p>
                </div>
                <ul class="list-group list-group-flush card-details">
                    <a href="<?php echo e(route('news')); ?>/<?php echo e($n->id); ?>">
                        <li class="list-group-item">
                            See details <i class="fa fa-caret-right"></i>
                        </li>
                    </a>
                </ul>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="more text-center">
            <a href="<?php echo e(route('news')); ?>"><h3 class="list-group-item">Read More</h3></a>
        </div>
    </div>
</div>
<div class="quotes">
    <div class="container-fluid">
        <blockquote class="blockquote text-center">
            <p><em>“Taking pains to remove the pains of others is the true essence of generosity.”</em></p>
            <footer class="blockquote-footer">S Abu Bakr <cite title="Source Title">(R.A)</cite></footer>
        </blockquote>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/web/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel6/resources/views/web/content/home.blade.php ENDPATH**/ ?>