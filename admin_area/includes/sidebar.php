<?php
include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{


?>




<nav class="navbar navbar-inverse " style="background:black ;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target='.navbar-ex1-collapse'>
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button>
        <a href="index.php?dashboard" class="navbar-brand">Admin Panel</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" style="margin-right: 10px;" data-toggle="dropdown">
                <i class="fa fa-user"></i><?php echo $admin_name?>

            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?user_profile?admin_id=<?php echo $admin_id?>">
                        <i class="fa-solid fa-user"></i>Profile
                    </a>
                </li>
                <li>
                    <a href="index.php?view_product">
                        <i class="fa-solid fa-podcast"></i>Product
                        <span class="badge">
                            <?php echo $count_pro?>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="index.php?user_customer">
                        <i class="fa-solid fa-users"></i>Customer
                        <span class="badge">
                            <?php echo $count_cust?>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="index.php?user_cat">
                        <i class="fa-solid fa-list"></i>Product Categories
                        <span class="badge">
                            <?php echo $count_p?>
                        </span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa-solid fa-power-off"></i>Logout</a>
                </li>
            </ul>

        </li>

    </ul>
    <!-- ?\end ul -->
    <div class="collapse  navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav text-info">
            <li>
                <a href="index.php?dashboard">
                    <i class="fa fa-gauge"></i>Dashboard
                </a>
            </li>
            <!-- start -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                <i class="fa fa-table-cells"></i>Product
                </a>
            
            <ul class="collapse" id="products">
                <li>
                    <a href="index.php?insert_product">Insert Product</a>
                </li>
                <li>
                    <a href="index.php?view_product">View Product</a>
                </li>

            </ul>
            </li>
            <!-- end -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                <i class="fa-solid fa-table-cells-large"></i>Product Categories
                </a>
            
            <ul class="collapse" id="cat">
                <li>
                    <a href="index.php?insert_product_cat">Insert Product Categories</a>
                </li>
                <li>
                    <a href="index.php?view_product_cat">View Product Categories</a>
                </li>

            </ul>
            </li>


            <li>
                <a href="#" data-toggle="collapse" data-target="#categories">
                <i class="fa fa-table-cells"></i>Categories
                </a>
            
            <ul class="collapse" id="categories">
                <li>
                    <a href="index.php?insert_cat">Insert Categories</a>
                </li>
                <li>
                    <a href="index.php?view_cat">View Categories</a>
                </li>

            </ul>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#slider">
                <i class="fa fa-table-cells"></i>  Slider
                </a>
            
            <ul class="collapse" id="slider">
                <li>
                    <a href="index.php?insert_slider">Insert Slider</a>
                </li>
                <li>
                    <a href="index.php?view_slider">View slider</a>
                </li>

            </ul>
            </li>
            <li>
                <a href="index.php?view_customer">
                <i class="fa fa-fw fa-list"></i>  View Customer  
                </a>
            </li>
            <li>
                <a href="index.php?view_order">
                <i class="fa fa-fw fa-edit"></i>  View Order 
                </a>
            </li>
            <li>
                <a href="index.php?view_Payments">
                <i class="fa fa-fw fa-pencil"></i>  View Payments  
                </a>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                <i class="fa fa-table-cells"></i> Users
                </a>
            
            <ul class="collapse" id="users">
                <li>
                    <a href="index.php?insert_Users">Insert User</a>
                </li>
                <li>
                    <a href="index.php?view_user">View Users</a>
                </li>
               

            </ul>
            </li>
        </ul>
    </div>

</nav>
<?php }?>