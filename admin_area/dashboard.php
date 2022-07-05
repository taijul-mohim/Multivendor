<?php
if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{





?>






<div class="row">
    <div class="col-lg-12">
        
        <center>
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li class="active">
                   <i class="fa fa-dashboard">Dashboard</i>
                </li>

            </ol>
        </center>
    </div>
</div>
<center>
    <div class="row container">
        <!-- box start -->
        <div class="col-lg-3 col-md-6">
           <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i  class='fa fa-tasks fa-5x'></i>
                        </div>
                        <div class="col-xs-9 text-right">
                                <div class="huge">
                                <?php echo $count_pro?>
                                   
                                </div>
                                <div>
                                    Product
                                </div>
                        </div>
                    </div>
                    <!-- anchor -->
                    <a href="index.php?view_product">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <!-- end anchor -->
                </div>
           </div>
        </div>
        <!-- end -->
    <!-- start -->
    <div class="col-lg-3 col-md-6">
           <div class="panel" style="background: #5cd85c ; color:aliceblue">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x">
                        </i>
                    
                        </div>
                        
                        <div class="col-xs-9 text-right">
                                <div class="huge">
                               
                                <?php echo  $count_cust?>
                                </div>
                                <div>
                                    Customer
                                </div>
                        </div>
                    </div>
                    <!-- anchor -->
                    <a href="index.php?view_Customer">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <!-- end anchor -->
                </div>
           </div>
        </div>
        <!-- end -->
            <!-- start -->
    <div class="col-lg-3 col-md-6">
           <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                        <i class="fa-solid fa-cart-arrow-down fa-5x"></i> 
                    
                        </div>
                        
                        <div class="col-xs-9 text-right">
                                <div class="huge">
                                <?php echo  $count_p?>
                                   
                                </div>
                                <div>
                                    Product Categories
                                </div>
                        </div>
                    </div>
                    <!-- anchor -->
                    <a href="index.php?view_product_cat">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <!-- end anchor -->
                </div>
           </div>
        </div>
        <!-- end -->
            <!-- start -->
    <div class="col-lg-3 col-md-6">
           <div class="panel " style="background: #d9534f ; color:#fff">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                        <i class="fa-solid fa-bullseye fa-5x"></i>
                    
                        </div>
                        
                        <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php echo $count_o?>
                                   
                                </div>
                                <div>
                                    Order
                                </div>
                        </div>
                    </div>
                    <!-- anchor -->
                    <a href="index.php?view_order">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <!-- end anchor -->
                </div>
           </div>
        </div>
        <!-- end -->
    


   

    </div>



    <div class="row container">
        <div class="col-lg-8">
            <div class="panel panel-primary">
               <div class="panel-heading">
                <h3 class="panel-title">
                   <i class="fa fa-money fa-fw"></i>New Order
                </h3>
               </div>
               <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Order NO:</th>
                                <th>Customer Email:</th>
                                <th>Invoice No:</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        <?php 
                        
                        $i=0;
                        $get_order="SELECT * FROM customer_order ORDER BY 1 DESC LIMIT 0,5";
                        $run_order=mysqli_query($con,$get_order);
                        while($row=mysqli_fetch_array($run_order)){
                            
                            $order_id=$row['order_id'];
                            $customer_id=$row['customer_id'];
                            $product_id=$row['product_id'];
                            $invoice_on=$row['invoice_no'];
                            $qty=$row['qty'];
                            $date=$row['order_date'];
                            $stutas=$row['order_status'];
                            $i++
                        ?>


                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php 
                                $get_cust="SELECT * FROM customer WHERE customer_id='$customer_id'";
                                $query=mysqli_query($con,$get_cust);
                                $row=mysqli_fetch_array($query);
                                echo $customer_email=$row['c_email'];
                                
                                ?>
                            </td>
                                <td><?php echo $invoice_on?></td>
                                <td><?php echo $qty?></td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $stutas?></td>

                            </tr>
                            <?php }?>
                        </tbody>
                       
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?view_order">
                        View All Order <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
               </div>
            </div>
        </div>
        <!-- start -->
      <div class="col-md-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="thumb-info mb-md">
                        <img src="admin_images/admin.png" class="rounded img-responsive" alt="">
                        <div class="thumb-info-title">
                            <span class="thumb-info-inner">Admin Name:</span>
                            <span class="thumb-info-type"> Admin Job</span>
                        </div>
                    </div>
                    <div class="mb-md">
                        <div class="widget-content-expanded">
                            <i class="fa fa-user"></i><span>Email</span>Admin Email <br>
                            <i class="fa fa-user"></i><span>Contact</span>Admin Contact <br>
                        </div>
                        <hr class="dotted short" >
                        <h5 class="text-muted">About</h5>
                        <p>Admin About</p>
                    </div>
                </div>
            </div>
      </div>


    </div>












</center>
<?php }?>