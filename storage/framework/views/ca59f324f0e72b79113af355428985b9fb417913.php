<?php echo $__env->make('web/resources/resources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
  <div class="wrapper">
      <?php echo $__env->make('web/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="footer">
      <?php echo $__env->make('web/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

  </div>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/laravel/local/resources/views//web/index.blade.php ENDPATH**/ ?>