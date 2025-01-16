<?php $__env->startSection('container'); ?>

<div class="row">
              
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Amount : <?php echo e($pending_order); ?></h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pending Order</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Amount : <?php echo e($processing_order); ?></h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Processing Order</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Amount : <?php echo e($cancel_order); ?></h3>
                            <p class="text-danger ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cancel Order</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Amount : <?php echo e($complete_order); ?></h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Complete Order</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Transaction History</h4>


                      <div id="chartContainer" style="height: 170px; width: 100%; background-color: transparent !important;"></div>
                      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>

                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Total</h6>
                          <p class="text-muted mb-0"></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">৳<?php echo e($total); ?></h6>
                        </div>
                      </div>

                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1" >Cash on Delivery</h6>
                          <p class="text-muted mb-0"></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">৳<?php echo e($cash_on_payment); ?></h6>
                        </div>
                      </div>


                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Online Payment</h6>
                          <p class="text-muted mb-0"></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">৳<?php echo e($online_payment); ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Best Rating</h4>
                        <p class="text-muted mb-1">Voters</p>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">


                          <?php


                              $i=1;

                          ?>
                          
                          <?php $__currentLoopData = $per_rate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                          <?php if($i>5): ?>


                          <?php break; ?>;

                          <?php endif; ?>
                          <?php

                          $index_search = array_search($prod, $copy_product);




                          $product_get=DB::table('products')->where('id',$index_search)->first();




                          $copy_product[$index_search]=NULL;


                          $voter=DB::table('rates')->where('product_id',$index_search)->count();


                          //$per_rate=number_format($per_rate, 1);


                          // $whole = floor($per_rate);      // 1
                          //$fraction = $per_rate - $whole


                          $i++;



                          ?>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary">

                                <img class="img-xs" src="<?php echo e(asset('assets/images/'.$product_get->image)); ?>" alt="">

                                </div>
                              </div>
                      
                      



                              

                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject"><?php echo e($product_get->name); ?></h6>
                                  <p class="text-muted mb-0">Rating : <?php echo e($prod); ?></p>
                                </div>
                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted"><?php echo e($voter); ?></p>
                                
                                </div>
                              </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                            
                         
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Total Customer</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0"><?php echo e($customer); ?></h2>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                          <h6 class="text-muted font-weight-normal"></h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Total Delivery Boy</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0"><?php echo e($delivery_boy); ?></h2>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                          <h6 class="text-muted font-weight-normal"></h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Total Admin</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0"><?php echo e($admin); ?></h2>
                            <p class="text-danger ms-2 mb-0 font-weight-medium"></p>
                          </div>
                          <h6 class="text-muted font-weight-normal"></h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Top Seller</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                             
                              <th style="text-align:center;"> Product ID </th>
                              <th style="text-align:center;"> Product Name </th>
                              <th  style="text-align:center;"> Price </th>
                              <th   style="text-align:center;"> Quantity </th>
                          
                            </tr>
                          </thead>
                          <tbody>


                          
                          <?php


                              $i=1;

                          ?>
                          
                          <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                          <?php if($i>5): ?>


                          <?php break; ?>;

                          <?php endif; ?>
                          <?php

                          $index_search = array_search($prod,$copy_cart);




                          $product_get=DB::table('products')->where('id',$index_search)->first();




                          $copy_cart[$index_search]=NULL;




                          //$per_rate=number_format($per_rate, 1);


                          // $whole = floor($per_rate);      // 1
                          //$fraction = $per_rate - $whole


                          $i++;



                          ?>


                            <tr>
                             
                              <td style="text-align:center;"> <?php echo e($product_get->id); ?> </td>
                              <td style="text-align:center;"> <?php echo e($product_get->name); ?> </td>
                              <td  style="text-align:center;"> <?php echo e($product_get->price); ?> </td>
                              <td    style="text-align:center;"> <?php echo e($prod); ?> </td>
                           
                            </tr>


                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>







<?php $__env->stopSection(); ?>



<script type="text/javascript">






window.onload = function () {




var cash_pay_value = "<?php echo $cash_on_payment; ?>";
var online_pay_value = "<?php echo $online_payment; ?>";

console.log(cash_pay_value);
console.log(online_pay_value);

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark2", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: ""
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		dataPoints: [
			{ label: "Cash on Delivery",  y: +cash_pay_value  },
			{ label: "Online Payment", y: +online_pay_value  },
		
		]
	}
	]
});
chart.render();

}
</script>



<style>

canvas {
    background-color: ;
    color: ;

}​



</style>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Restaurant_Ecommerce_System_Laravel-master/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>