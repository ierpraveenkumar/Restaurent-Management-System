<?php $__env->startSection('page-content'); ?>
<div>
    <br>
    <br>
    <br>
    <br>

    <center>
<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h4>Trace order</h4>

<br>
<br>

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 20.00%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<div class="row">

    <div class="column">

    <img src="<?php echo e(asset('assets/images/package.png')); ?>" height="100px" weight="100px" alt="">
    

    </div>

    <div class="column">

    <?php if($product->product_order=="cancel"): ?>
    
    <img src="<?php echo e(asset('assets/images/cancel.jpg')); ?>" style="margin-top: !important;" height="50px" weight="50px"  alt="">

    <h1 style= "color:Gray;padding-top:10px !important;" class="border2"></h1>



    <?php endif; ?>
    
    <?php if($product->product_order=="approve" || $product->product_order=="delivery"): ?>
    
    <img src="<?php echo e(asset('assets/images/right.png')); ?>" style="margin-top:-15px !important;" height="50px" weight="50px"  alt="">

    <h1 style="color:Green;">----------></h1>



    <?php endif; ?>


    
    <?php if($product->product_order=="yes"): ?>

    <h6 style="padding-top:25px;color:Red;padding-bottom:10px;">Waiting for Approve</h6>
    <h1 style= "color:Gray;padding-top:10px !important;" class="border2"></h1>


    <?php endif; ?>


    </div>

    <div class="column">

    <img src="<?php echo e(asset('assets/images/delivery.png')); ?>" height="100px" weight="100px"  alt="">

    </div>
    <div class="column">

    
    <?php if($product->product_order=="approve"): ?>

    <h6 id="count_down" style="padding-top:25px;color:Red;padding-bottom:10px;">(Remaining : <?php echo e($product->delivery_time); ?>)</h6>
    <h1 style= "color:Gray;padding-top:10px !important;" class="border2"></h1>
    <input type="text" id="previous_time" style="display:none" value="<?php echo e($product->delivery_time); ?>">



    <?php endif; ?>


    <?php if($product->product_order=="yes"): ?>


    <h1 style= "color:Gray;margin-top:25px;"></h1>


    <?php endif; ?>


    <?php if($product->product_order=="delivery"): ?>

    <img src="<?php echo e(asset('assets/images/right.png')); ?>" style="margin-top:-15px !important;" height="50px" weight="50px"  alt="">

    <h1 style="color:Green;">----------></h1>





    <?php endif; ?>

    </div>

 

    <div class="column">

    <img src="<?php echo e(asset('assets/images/order.png')); ?>" height="100px" weight="100px"  alt="">

    </div>


</div>

<br>
<br>

<br>

<br>
<?php break; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</center>
    <center>

    <h4>Product Details</h4>
    <br>
    <br>


    </center>
   
<table id="cart" class="table table-hover table-condensed container">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
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
                <td><?php echo e($product->name); ?></td>
                <td style="text-align:center">৳<?php echo e($product->price); ?></td>
                <td style="text-align:center"><?php echo e($product->quantity); ?></td>
                <td style="text-align:center">৳<?php echo e($product->subtotal); ?></td>
                
            </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $extra_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $total += $product['price'] * $product['quantity'] ?>
            <tr>
                <td><?php echo e($charge->name); ?></td>
                <td style="text-align:center"></td>
                <td style="text-align:center"></td>
                <td style="text-align:center">৳<?php echo e($charge->price); ?></td>
                
            </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
    <tr>
        <?php 
        
        
        $total = $total_price;
        
        Session::put('total',$total_price);
        
        ?>
            <td colspan="4" class="text-right"><h6><strong>Total ৳<?php echo e($without_discount_price); ?></strong></h6></td>
        </tr>
        <tr>
        <?php 
        
        
        $total = $total_price;
        
        Session::put('total',$total_price);
        
        ?>
            <td colspan="4" class="text-right"><h6><strong>Discount ৳<?php echo e($discount_price); ?></strong></h6></td>
        </tr>
        <tr>
        <?php 

        $time="Jan 5, 2024 15:37:25";
        
        
        $total = $total_price;
        
        Session::put('total',$total_price);
        
        ?>
            <td colspan="4" class="text-right"><h3><strong>Total (With Discount)৳<?php echo e($total_price); ?></h2></strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="<?php echo e(url('/menu')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
             
            </td>
        </tr>
    </tfoot>
</table>
</div>
<?php $__env->stopSection(); ?>

<style>


.border2 {
    height: 100%;
    width: 100%;
    background: linear-gradient(90deg, black 50%, transparent 50%);
               
    background-repeat: repeat-x, repeat-x, repeat-y, repeat-y;
    background-size: 16px 4px, 16px 4px, 4px 16px, 4px 16px;
    background-position: 0% 0%, 100% 100%, 0% 100%, 100% 0px;
    border-radius: 5px;
    padding: 10px;
    animation: dash 5s linear infinite;
}

@keyframes  dash {
    to {
        background-position: 100% 0%, 0% 100%, 0% 0%, 100% 100%;
    }
}



</style>

<script type="text/javascript" src="http://timeapi.org/utc/now.json?callback=myCallback"></script>

<script>
// Set the date we're counting down to



// Update the count down every 1 second
var x = setInterval(function() {


    var time=$('#previous_time').val();
    var copy_time=time;
    substring="pm";
    
    time = time.substring(0, 22);

 

    console.log(time);
  
    var countDownDate = new Date(time).getTime();

    if(copy_time.includes(substring))
    {

        console.log('pm');

       // countDownDate = countDownDate + (1000*60*60*12);


    }
    else
    {

        console.log('am');

        // countDownDate = countDownDate - (1000*60*60*12);



    }
    console.log(countDownDate);

    //pm indictator


 
    // Get today's date and time
    var now = new Date();
    now=now.getTime();
    now.toLocaleString('en-US', { timeZone: 'America/New_York' });
    console.log(now);
        
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.getElementById("count_down").innerHTML = "( Remaining : " + days + "d " + hours + "h "
    + minutes + "m " + seconds + "s )";
        
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("count_down").innerHTML = "Ready for Delivery";
    }

}, 1000);
</script>

<?php echo $__env->make('layout', ['title'=> 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/trace_confirm.blade.php ENDPATH**/ ?>