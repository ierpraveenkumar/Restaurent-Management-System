<?php $__env->startSection('container'); ?>


<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Banner</h4>
                    
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
                    <br>

                    <form class="forms-sample" runat="server" action="/banner/add/process" method="post" enctype="multipart/form-data">

                       <?php echo csrf_field(); ?>

    

                      <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  
                    
                      <button type="submit" class="btn btn-primary me-2">Submit</button>

                    </form>
                  </div>
                </div>

            </div>






<script>




</script>




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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/add_banner.blade.php ENDPATH**/ ?>