<?php $__env->startSection('container'); ?>





<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reservation Details</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          
           
                            <th> Date </th>
                            <th> Time </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone</th>
                        
                            <th> No of Guests </th>
              
                  
                            
                            <th> Message </th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                           
                            <td>
                              <span class="ps-2"><?php echo e($reservation->date); ?></span>
                            </td>
                            <td> <?php echo e($reservation->time); ?> </td>
                            <td> <?php echo e($reservation->name); ?> </td>
                            <td>


                            <?php echo e($reservation->email); ?>



                            </td>


                            <td>  <?php echo e($reservation->phone); ?></td>
                            <td> <?php echo e($reservation->no_guest); ?> </td>
                     
                 

                            <td>

                            <?php echo e($reservation->message); ?>


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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/reservations.blade.php ENDPATH**/ ?>