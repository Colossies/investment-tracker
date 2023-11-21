<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <link rel="stylesheet" href = "<?php echo e(asset('css/template.css')); ?>">
        <title>template</title>
    </head>
    <header>
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <body>
        
        <div class = 'content'>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        
    </body>
    <footer>
         <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</html>
<?php /**PATH D:\Binus\1.Notes\Semester_5\WebProg\Test Projects\Fresh Install\freshInstall\resources\views/template.blade.php ENDPATH**/ ?>