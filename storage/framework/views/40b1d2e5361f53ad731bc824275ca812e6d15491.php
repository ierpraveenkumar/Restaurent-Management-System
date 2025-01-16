<?php $__env->startSection('container'); ?>






<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pending Order Details</h4>

                    <?php if(Session::has('wrong')): ?>

                        <br>
              
                          <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Opps !</strong> <?php echo e(Session::get('wrong')); ?>

                      </div>
                      <br>
                          <?php endif; ?>
                          <?php if(Session::has('success')): ?>


                          <br>
                    
                          <div class="success">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Congrats !</strong> <?php echo e(Session::get('success')); ?>

                      </div>
                          <br>
                          <?php endif; ?>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          
           
                            <th> Date </th>
                            <th> Invoice No </th>
                            <th> Customer Name </th>
                            <th> Customer Phone</th>
                        
                            <th> Shippping Address </th>
              
                  
                            <th> Payment Method </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                           
                            <td>
                              <span class="ps-2"><?php echo e($order->purchase_date); ?></span>
                            </td>
                            <td> <?php echo e($order->invoice_no); ?> </td>
                            <td>


                            <?php

                              $user=DB::table('users')->where('id',$order->user_id)->first();

                            ?>


                            <?php echo e($user->name); ?>




                            </td>


                            <td>  <?php echo e($user->phone); ?></td>
                            <td> <?php echo e($order->shipping_address); ?> </td>
                     
                            <td> <?php echo e($order->pay_method); ?> </td>

                            <td>

                            <a href="<?php echo e(asset('/invoice/details/'.$order->invoice_no)); ?>" class="badge badge-outline-primary">Details</a>
                            </td>
                          </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
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
  background-color: #4BB543 ;
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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/incomplete-orders.blade.php ENDPATH**/ ?>