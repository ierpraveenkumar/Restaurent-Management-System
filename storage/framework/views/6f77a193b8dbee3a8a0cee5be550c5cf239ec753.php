<?php $__env->startSection('container'); ?>


<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Menu</h4>
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

                    <form class="forms-sample" action="/menu/add/process" method="post" enctype="multipart/form-data">

                       <?php echo csrf_field(); ?>

                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="5"></textarea>
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputPassword4">Price</label>
                        <input type="number" name="price" class="form-control" id="exampleInputPassword4">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Catagory</label>
                        <select class="form-control" name="catagory" id="exampleSelectGender">
                          <option value="regular">Regular</option>
                          <option value="special">Special</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Season</label>
                        <select class="form-control" name="session" id="exampleSelectGender">
                          <option value="0">Breakfast</option>
                          <option value="1">Lunch</option>
                          <option value="2">Dinner</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Available</label>
                        <select class="form-control" name="available" id="exampleSelectGender">
                          <option>Stock</option>
                          <option>Out of Stock</option>

                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  
                    
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
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
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/add_menu.blade.php ENDPATH**/ ?>