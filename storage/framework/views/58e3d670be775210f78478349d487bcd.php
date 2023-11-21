<!-- 
    Home will have a button to go to log and a button to go to summary
 -->


<?php $__env->startSection('content'); ?>
<div>
    <div class = "">
        <!-- Each button will be in the form of a card -->
        <div class = "card">
            <button class = "button", id = "log", onclick = "window.location = '<?php echo e(route('log')); ?>'">
                Investment Log
            </button>
        </div>
        <div class = "card">
            <button class = "button", id = "summary", onclick="window.location='<?php echo e(route('summary')); ?>'">
                Investment Summary
            </button>
        </div>
        <div class = "card">
            <button class = "button", id = "invest", onclick="window.location='<?php echo e(route('invest')); ?>'">
                Invest
            </button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\1.Notes\Semester_5\WebProg\Test Projects\Fresh Install\freshInstall\resources\views/home.blade.php ENDPATH**/ ?>