<?php $__env->startSection('container'); ?>


<a href="/add/chef" type="button" class="btn btn-success" style="width:170px;height:35px;padding-top:9px;">+ Add Chef</a>


<br>

<br>




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

<?php

   
  
    $i=1;


?>
<?php $__currentLoopData = $chefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>





<?php if($i%3==1): ?>
<div class="card-deck" style="margin-top:20px;">
 
<?php endif; ?>
  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('assets/images/'.$chef->image)); ?>" style="width:100%;height:280px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($chef->name); ?></h5>
      <p> Job Title : <?php echo e($chef->job_title); ?></p>
     
      <p class="card-text" style="font-size:20px;">
     
                                <a href="<?php echo e($chef->facebook_link); ?>" target="_blank"><i class="mdi mdi-facebook" ></i></a>
                                <a href="<?php echo e($chef->twitter_link); ?>" target="_blank"><i class="mdi mdi-twitter"></i></a>
                                <a href="<?php echo e($chef->instragram_link); ?>" target="_blank"><i class="mdi mdi-instagram"></i></a>
                            
                            </p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="<?php echo e(asset('/chef/edit/'.$chef->id)); ?>" class="btn btn-primary">Edit</a>
      <a href="<?php echo e(asset('/chef/delete/'.$chef->id)); ?>" class="btn btn-danger" style="margin-left:10px;">Delete</a>



      </small>
    </div>
  </div>
  

  <?php if($i%3==0): ?>

</div>
<?php endif; ?>



<?php

   
  
    $i++;


?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if(($i-1)%3!=0): ?>

  <?php if($fraction==2): ?>


  <div class="card" style="background-color:black;"></div>




  <?php endif; ?>

  <?php if($fraction==1): ?>


  <div class="card" style="background-color:black;"></div>
  
  <div class="card" style="background-color:black;"></div>
  



<?php endif; ?>




  

<?php endif; ?>




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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/chefs.blade.php ENDPATH**/ ?>