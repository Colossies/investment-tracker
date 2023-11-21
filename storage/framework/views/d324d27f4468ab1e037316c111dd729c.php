<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href = "<?php echo e(asset('css/template.css')); ?>">
<style>
    table {
        border-collapse: collapse;
        max-width: 100%; /* Optional: Set the width of the table */
    }
    table, th, td {
        border: 1px solid black; /* Add a 1px solid black border */
        padding: 2px;
    }
</style>
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Publisher</th>
        </tr>
        <?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($data->id); ?> </td>
            <td> <?php echo e($data->name); ?> </td>
            <td> <?php echo e($data->publisher->name); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class = 'table_button'>
        <?php if($prev >= 1): ?>
        <a href = "<?php echo e(route('paginator', ['page' => 'game_companies', 'pagination' => $prev])); ?>">prev</a>
        <?php else: ?>
        prev
        <?php endif; ?>
        <a href = "<?php echo e(route('paginator', ['page' => 'game_companies', 'pagination' => $next])); ?>">next</a>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\1.Notes\Semester_5\WebProg\Test Projects\Fresh Install\freshInstall\resources\views/game_companies.blade.php ENDPATH**/ ?>