<?php 
session_start();
include("include/db.php");
include("function/function.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commarce</title>
    <!-- //Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div id="top">
        <!--top bar  -->
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">
                <?php
                   if(!isset($_SESSION['customer_email'])){
                    echo "Wellcome Guest";
                    } else{
                        echo "Wellcome". "  " . $_SESSION['customer_email'];

                   }

                   
                   
                   
                   ?>

   

                
                </a>
                <a href="#">Shopping Cart Total price :<?php totalPrice()?>TK,Items:<?php itme() ?></a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_register.php">Register</a></li>
                    <li>
                        <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>My account</a>";
                        }else{
                            echo '<a href="customer/my_account.php?my_order">My account</a>';
                        }
                        
                        
                        
                        
                        ?>
                    </li>
                    <li><a href="cart.php">Goto Cart</a></li>
                    <li>
                        <?php
                if(!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a> ";
                }else{
                    echo "<a href='logout.php'>logout</a>";
                }

?>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!--end top  -->
    <!-- navbar -->
    <div class="header">
        <div class="navbar navbar-default" id='navbar'>
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <img src="images/logo.png " alt="teehosting" height="40px" class="hidden-xs thumble">
                        <img src="images/logo.png " alt="teehosting" class="visible-xs">
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>

                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-search"></i>

                    </button>
                    <!-- <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i>
                    </button> -->
                </div>
                <!-- menu -->
                <div class="navbar-collapse collapse " id="navigation">
                    <!-- start nav -->
                    <div class="padding-nav">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><?php if(!isset($_SESSION['customer_email'])){ echo "<a href='checkout.php'>My account</a>";}else{echo '<a href="customer/my_account.php?my_order">My account</a>';}?></li>
                            <li><a href="cart.php">Shopping Cart</a></li>
                        
                            <li><a href="contactus.php">Contact us</a></li>


                        </ul>
                    </div>
                    <!-- end nav -->


                    <!-- search -->
                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart "></i>
                        <span><?php itme()?> Items In cart</span>
                    </a>

                    <div class="navbar-collapse collapse-right">
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#search">
                            <span class="sr-only"> Toggle search</span>
                            <i class="fa fa-search"></i>

                        </button>
                    </div>
                    <div class="collapse clearfix" id="search">

                        <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                                <input type="text" name="search" placeholder="search" class="form-control"
                                    required="">
                                <span class="input-group-btn">


                                    <button type="submit" value="Search"  class="btn btn-primary">
                                        <i class="fa fa-search "></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar end -->



 

    <div id="content" class="container">
        <div class="row">
            <!-- <div class="col-md-4 col-sm-6 center-responsive single">
                <div class="product">

                    <a href="details.php">
                        <img src="admin_area/product_images/1.jpg" height="" width=" " class="img-responsive" alt="">
                        <div class="text">
                            <h3><a href="details.php">Lorem ipsum dolor sit amet.</a></h3>
                            <p class="price">$15</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default"> View Details</a>
                                <a href="details.php" class="btn btn-primary"> <i class="fa fa-shoppinf-cart"></i> Add
                                    to cart</a>
                            </p>
                        </div>
                    </a>
                </div>

            </div> -->
            <!-- end -->
         
          
            <h2 class="text-center">Foods on Your Search <a href="#" class="text-white"></a></h2>
        
            <?php     
               $search=$_GET['search'];
                // $search=preg_replace("#[^0-9a-z]#i","",$search);
                $sqli="SELECT * FROM product WHERE product_title LIKE '%$search%'";
               $query=mysqli_query($con,$sqli);
               $count=mysqli_num_rows($query);
               if($count>0){  
                $massage="Product Find";             
                while($row=mysqli_fetch_assoc($query)){
                    $pro_id= $row['product_id'];
                    $product_title=$row['product_title'];
                    $product_price=$row['product_price'];
                    $product_img=$row['product_img1'];
                    echo "
                    <div class='col-md-4 col-sm-6 center-responsive single'>
                    <div class='product'>
              
                        <a href='details.php?pro_id=$pro_id'>
                            <img src='admin_area/product_images/$product_img'  height='580px' width='425px'  class='img-responsive' alt=''>
                            <div class='text'>
                                <h3>$product_title</h3>
                                
                                <p class='price'>$product_price tk</p>
                                <center>
                                <p class='button'>
                                    <a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
                                    <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> <i class='fa fa-shoppinf-cart'></i> Add
                                        to cart</a>
                                </p>
                                </center>
                            </div>
                        </a>
                    </div>
              
                </div>
                    ";
              
                   
                  }
                }else{


                    echo "<script>alert(' Itmes cant Find')</script>"  ;
                    echo "<script>window.open('index.php','_self')</script>";


            
            
                }   
            
            ?>
 




                <!-- end -->
            <!-- end -->
        <!-- end -->
           
            <!-- end -->
            
            <!-- end -->
           
                    <!-- end -->
                    
                    <!--  -->
        </div>

    </div>

    <?php  include("include/footer.php");  ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</body>

</html>