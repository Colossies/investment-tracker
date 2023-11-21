<!-- 
    Home will have a button to go to log and a button to go to summary
 -->


<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href = "<?php echo e(asset('css/table.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class = "content">
    <div class = "table">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Investment Type</th>
                <th>Action</th>
                <th>Amount</th>
                <th>Price/Unit</th>
                <th>units</th>
                <th>Fee(%)</th>
                <th>Total Spent</th>
                <th>Date</th>
            </tr>
            <?php $__currentLoopData = $investment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($data->id); ?></td>
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->investment_type); ?></td>
                <td><?php echo e($data->action); ?></td>
                <td><?php echo e($data->amount); ?></td>
                <td><?php echo e($data->price_unit); ?></td>
                <td><?php echo e($data->units); ?></td>
                <td><?php echo e($data->fee); ?></td>
                <td><?php echo e($data->amount_spent); ?></td>
                <td><?php echo e($data->created_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <div class = 'table_button'>
            <?php if($curr_page - 1 >= 1): ?>
            <a href = "<?php echo e(route('log', ['page' => $curr_page - 1])); ?>">prev</a>
            <?php else: ?>
            prev
            <?php endif; ?>
            <a href = "<?php echo e(route('log', ['page' => $curr_page + 1])); ?>">next</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\1.Notes\Semester_5\WebProg\Test Projects\Fresh Install\freshInstall\resources\views/log.blade.php ENDPATH**/ ?>