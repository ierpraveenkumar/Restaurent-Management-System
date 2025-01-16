<?php $__env->startSection('page-content'); ?>
<div>
    <br>
    <?php if(Session::has('wrong')): ?>
    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Opps !</strong> <?php echo e(Session::get('wrong')); ?>

</div>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
    <br>
    <div class="success">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Congrats !</strong> <?php echo e(Session::get('success')); ?>

</div>
    <br>
    <?php endif; ?>
    <br>
    
    <br>
    <br>
    
<table id="cart" class="table table-hover table-condensed container">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="text-align:center;width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0 ?>
        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $total += $product['price'] * $product['quantity'] ?>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td style="text-align:center">৳<?php echo e($product->price); ?></td>
                <td style="text-align:center"><?php echo e($product->quantity); ?></td>
                <td style="text-align:center">৳<?php echo e($product->subtotal); ?></td>
                <td style="text-align:center" class="actions" data-th="">
                    <form method="post" action="<?php echo e(route('cart.destroy', $product)); ?>" onsubmit="return confirm('Sure?')">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash">
                        </i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  
      <?php if($total_price!=0): ?>


            <?php $__currentLoopData = $extra_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chrage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($chrage->name); ?></td>
                <td style="text-align:center"></td>
                <td style="text-align:center"></td>
                
              
                <td style="text-align:center">৳<?php echo e($chrage->price); ?></td>


        
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



      <?php endif; ?>
        <?php 
        

        
        ?>
        </tbody>
    <tfoot>
        <form method="post" action="<?php echo e(route('coupon/apply')); ?>">
            <?php echo csrf_field(); ?>    

            <?php if($total_price==0): ?>
            <td colspan="3" class="text-right" ><strong>  <p style="margin-top:8px !important;">Coupon Code</p> </strong></td>
            <td>  <input type="text" name="code" class="form-control" id="exampleFormControlInput1" placeholder=""></td>
            <td> <button type="submit" class="btn btn-dark" disabled>Apply</button> </td>
            <?php endif; ?>
            <?php if($total_price!=0): ?>
            <td colspan="3" class="text-right" ><strong>  <p style="margin-top:8px !important;">Coupon Code</p> </strong></td>
            <td>  <input type="text" name="code" class="form-control" id="exampleFormControlInput1" placeholder=""></td>
            <td> <button type="submit" class="btn btn-dark">Apply</button> </td>
            <?php endif; ?>
</form>
        </tr>
        <tr>
        <?php 
        
        
        $total = $total_price + $total_extra_charge;
        
        Session::put('total',$total_price);

        if($total_price!=0)
        {
            $total_price=$total_price+$total_extra_charge;
            $without_discount_price=$without_discount_price + $total_extra_charge;

        }




        
        ?>
       
            <td colspan="5" class="text-right"><h5><strong>Total ৳<?php echo e($without_discount_price); ?></strong></h5></td>
        </tr>
        <tr>
  
            <td colspan="5" class="text-right"><h5><strong>Discount ৳<?php echo e($discount_price); ?></strong></h5></td>
        </tr>
        <tr>
      
            <td colspan="5" class="text-right"><h3><strong>Total (With Discount) ৳<?php echo e($total_price); ?></strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="<?php echo e(url('/menu')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <form style="display:inline" method="post" action="<?php echo e(route('cart.checkout', $total)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php if($total_price==0): ?>
                    <button class="btn btn-success" disabled>Checkout</button>
                    <?php else: ?>
                    <button class="btn btn-success">Checkout</button>
                    <?php endif; ?>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
</div>
<?php $__env->stopSection(); ?>


<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}


.success {
  padding: 20px;
  background-color: #4BB543;
  color: white;
}


.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php echo $__env->make('layout', ['title'=> 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/cart.blade.php ENDPATH**/ ?>