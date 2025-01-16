<?php $__env->startSection('page-content'); ?>
<div style="width:80%; margin:auto;">
    <br>
    <br>
    <br>
    <br>
    <h1>Your order amount is ৳<?php echo e($total); ?></h1><br>
    <h2 style="color:#FB5849">Choose a payment method</h2><br>
    <input ng-model="myVar" type="radio" id="cod" name="cod" value="cod">
    <label for="cod"><img style="max-width:150px;" src="<?php echo e(asset('assets/images/cod.png')); ?>"></label><br>
    <input ng-model="myVar" type="radio" id="bkash" name="bkash" value="bkash">
    <label for="bkash"><img style="max-width:150px;"  src="<?php echo e(asset('assets/images/bkash.png')); ?>"></label><br><br><br>
    <div ng-switch="myVar">
        <?php if(Auth::check()): ?>
            <div ng-switch-when="cod">
             
                <form style="display:inline"  method="post" action="<?php echo e(route('mails.shipped', $total)); ?>">
                <?php echo csrf_field(); ?>
                    <input class="btn btn-success" type="submit" value="Place Order">
                </form>
            </div>
            <div ng-switch-when="bkash">
            <?php
                Session::put('total',$total);
            ?>
            <a href="/ssl/pay"><input class="btn btn-success" type="submit" value="Pay with Online"></a>
                 
                <?php echo $__env->make('bkash-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php else: ?>
            <div ng-switch-when="cod">
               
            </div>
            <div ng-switch-when="bkash">
                <a href="/login"><input class="btn btn-success" type="submit" value="Log in"></a>
            </div>
        <?php endif; ?>
    </div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', ['title'=> 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/checkout.blade.php ENDPATH**/ ?>