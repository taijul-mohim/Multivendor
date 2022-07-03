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
                                    12
                                   
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
                                    12
                                   
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
                                    12
                                   
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
                                    12
                                   
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
</center>
<?php }?>