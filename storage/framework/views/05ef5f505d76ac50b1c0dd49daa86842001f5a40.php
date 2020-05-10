<?php echo $__env->make('remote/resources/resources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('remote/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('menu'); ?>
<?php /**PATH /opt/lampp/htdocs/laravel/local/resources/views/remote/index.blade.php ENDPATH**/ ?>