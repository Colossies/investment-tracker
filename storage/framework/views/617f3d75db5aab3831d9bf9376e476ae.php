<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <title>Investment Web</title>
        <link rel="stylesheet" href = "<?php echo e(asset('css/template.css')); ?>">
        <?php echo $__env->yieldContent('stylesheets'); ?>
        
    </head>
    <body>
       <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->yieldContent('content'); ?>
       <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH D:\Binus\1.Notes\Semester_5\WebProg\Test Projects\Fresh Install\freshInstall\resources\views/master.blade.php ENDPATH**/ ?>