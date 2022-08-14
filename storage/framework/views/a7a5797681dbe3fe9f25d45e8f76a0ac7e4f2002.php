<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main role="main" class="container">
<?php echo $__env->yieldContent('content'); ?>
</main>

<?php echo $__env->make('includes.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Brigi\Desktop\larav\tutorial\resources\views/layouts/app.blade.php ENDPATH**/ ?>