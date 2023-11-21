<!-- 
    Home will have a button to go to log and a button to go to summary
 -->
<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href = "<?php echo e(asset('css/invest.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div>
    <div class = "content">
        <!-- Each button will be in the form of a card -->
        <div class = "form">
            <h1>FORM</h1>
            <hr>
            <form action = "<?php echo e(route('post_invest')); ?>" method = "POST">
                <?php echo csrf_field(); ?>
                <div class = "form-group">
                    <label>Action</label>
                    <div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "action" id = "buy" value = "buy" checked>
                            <label class = "form-check-label" for = "buy">Buy</label>
                        </div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "action" id = "sell" value = "sell">
                            <label class = "form-check-label" for = "sell">Sell</label>
                        </div>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "name" class = "margin2">Investment Name</label>
                    <input type = "text" class = "form-control margin2" id = "name" name = "name">
                </div>  

                <div class = "form-group">
                    <label for = "type" class = "margin2">Investment Type</label>
                    <select class = "form-control margin2" name ="type" id = "type">
                        <option value ="mutual-funds">Mutual Funds</option>
                        <option value = "stocks">Stocks</option>
                    </select>
                </div>

                <div class = "form-group">
                    <label>Amount Mode</label>
                    <div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "amount_mode" id = "money" value = "money" checked>
                            <label class = "form-check-label" for = "money">Money</label>
                        </div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "amount_mode" id = "unit" value = "unit">
                            <label class = "form-check-label" for = "unit">Unit (i.e. lot)</label>
                        </div>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "amount" class = "margin2">Amount</label>
                    <input type = "text" class = "form-control margin2" id = "amount" name = "amount" step = "any" pattern="\d+(\.\d{1,2})?">
                </div>
                
                <div class = "form-group">
                    <label for = "price_unit" class = "margin2">Price/Unit</label>
                    <input type = "text" class = "form-control margin2" id = "price_unit" name = "price_unit" step = "any" pattern="\d+(\.\d{1,2})?">
                </div>

                <div class = "form-group">
                    <label for = "fee" class = "margin2">Fee (%)</label>
                    <input type = "text" class = "form-control margin2" id = "fee" name = "fee" step = "any" pattern="\d+(\.\d{1,2})?">
                </div>

                <button type ="submit" class = "invest">Invest</button>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\1.Notes\Semester_5\WebProg\Test Projects\Fresh Install\freshInstall\resources\views/invest.blade.php ENDPATH**/ ?>