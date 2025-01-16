<?php $__env->startSection('container'); ?>


<a href="/add/delivery_boy" type="button" class="btn btn-success" style="width:170px;height:35px;padding-top:9px;">+ Add Delivery boy</a>


<br>
<br>


<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Delivery boy Details</h4>
                    
                    <?php if(Session::has('wrong')): ?>
              
                    <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  <strong>Opps !</strong> <?php echo e(Session::get('wrong')); ?>

                </div>
                <br>
                    <?php endif; ?>
                    <?php if(Session::has('success')): ?>
              
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
                          
           
                            <th> ID </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone</th>

                            <th>Salary</th>
                        


                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $delivery_boys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delivery_boy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                           
                            <td>
                              <span><?php echo e($delivery_boy->id); ?></span>
                            </td>
                            <td> <?php echo e($delivery_boy->name); ?> </td>


                         




                            <td> <?php echo e($delivery_boy->email); ?></td>


                            <td> <?php echo e($delivery_boy->phone); ?> </td>

                            <td><?php echo e($delivery_boy->salary); ?> Tk</td>
                     


                            <td>

                            <a href="<?php echo e(asset('/delivery_boy/edit/'.$delivery_boy->id)); ?>" class="badge badge-outline-primary">Edit</a>
                              <a href="<?php echo e(asset('/delivery_boy/delete/'.$delivery_boy->id)); ?>" class="badge badge-outline-danger" style="margin-left:10px;">Delete</a>
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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/delivery_boys.blade.php ENDPATH**/ ?>