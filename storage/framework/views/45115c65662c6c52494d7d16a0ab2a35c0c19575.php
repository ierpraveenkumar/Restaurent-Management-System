<?php $__env->startSection('page-content'); ?>
<div>
    <br>
    <br>
    <br>
    <br>
    <center>


    <h1>My order</h1>

    <br>
    <br>


    </center>
<table id="cart" class="table table-hover table-condensed container">
    <thead>
        <tr>
            <th style="width:10%">Date</th>
            <th style="width:10%">Invoice No.</th>
            <th style="width:50%">Product</th>
            <th style="width:20%">Payment Method</th>
            <th style="text-align:center;width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            
        </tr>
    </thead>
    <tbody>
        <?php $total = 0 ?>
        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $total += $product['price'] * $product['quantity'] ?>
            <tr>
                <td><?php echo e($product->purchase_date); ?></td>
                <td><?php echo e($product->invoice_no); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->pay_method); ?></td>
                <td style="text-align:center">৳<?php echo e($product->price); ?></td>
                <td style="text-align:center"><?php echo e($product->quantity); ?></td>
                <td style="text-align:center">৳<?php echo e($product->subtotal); ?></td>
              
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
        <tr>
        <?php 
        
        
        $total = $total_price;
        
        Session::put('total',$total_price);
        
        ?>
            <td colspan="7" class="text-right"><h3><strong>Total ৳<?php echo e($total_price); ?></strong></h3></td>
        </tr>
        <tr>
            <td colspan="7" class="text-right">
                <a href="<?php echo e(url('/menu')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
              
            </td>
        </tr>
    </tfoot>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', ['title'=> 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/my_order.blade.php ENDPATH**/ ?>