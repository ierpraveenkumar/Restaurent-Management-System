<?php $__env->startSection('container'); ?>


<a href="/customize/edit" type="button" class="btn btn-primary">Edit Template</a>
<br><br>

<?php $__currentLoopData = $customize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customize_theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card">
  <h5 class="card-header">Title : <?php echo e($customize_theme->title); ?></h5>
  <div class="card-body">
    <p class="card-text"><b>Description : </b> <?php echo e($customize_theme->description); ?></p>
    <br>
  </div>
</div>

<br>
<br>

<div class="card-group">
  <div class="card">
    <img src="<?php echo e(asset('assets/images/'.$customize_theme->image1)); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Section 1 Image</h5>
      <p class="card-text">

        


    
      </p>
    </div>
  
  </div>
  <div class="card" style="margin-left:20px;">
    <img src="<?php echo e(asset('assets/images/'.$customize_theme->image2)); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Section 2 Image</h5>

    <p class="card-text">

        




</p>
</div>
  </div>
  <div class="card"  style="margin-left:20px;">
    <img src="<?php echo e(asset('assets/images/'.$customize_theme->image3)); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Section 3 Image</h5>

    <p class="card-text">

        





</p>
</div>
  </div>
</div>

<br><br>
<h1>Video</h1>
<br>

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo e($customize_theme->youtube_link); ?>" allowfullscreen></iframe>
</div>

<br>
<br>



<br>
<br>
<br>



<div class="card mb-3">
  <img src="<?php echo e(asset('assets/images/'.$customize_theme->vd_image)); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Video Thumbnail</h5>
  </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/customize.blade.php ENDPATH**/ ?>