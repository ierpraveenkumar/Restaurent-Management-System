<?php $__env->startSection('container'); ?>






<?php 

    $i=1;

?>



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

  <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card mb-3">
  <img src="<?php echo e(asset('assets/images/'.$banner->image)); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Banner <?php echo e($i); ?></h5>

    <a href="<?php echo e(asset('admin/banner/edit/'.$banner->id)); ?>" type="button" class="btn btn-primary">Edit</a>
    <a href="<?php echo e(asset('admin/banner/delete/'.$banner->id)); ?>" type="button" class="btn btn-danger">Delete</a>
  </div>
</div>
<?php 

    $i++;

?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/banners.blade.php ENDPATH**/ ?>