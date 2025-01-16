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
    <div class="success">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Congrats !</strong> <?php echo e(Session::get('success')); ?>

</div>
    <?php endif; ?>
    <br>
    <br>
    <br>
   
    
            <center>
                    <div class="contact-form">
                        <form id="" action="/trace/confirm" method="post">
                            <?php echo csrf_field(); ?>
                          <div class="">
                            <div class="col-lg-12">
                                <h1>Trace my order</h1>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="invoice" type="text" id="name" placeholder="Invoice no" required="">
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number" required="">
                              </fieldset>
                            </div>
                           
                           
                           
                            <div class="col-lg-6">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Submit</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
               
                    </center>
            

</div>
<?php $__env->stopSection(); ?>








<style>
.alert {
  padding: 20px;
  background-color: #f44336;
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
<?php echo $__env->make('layout', ['title'=> 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/trace.blade.php ENDPATH**/ ?>