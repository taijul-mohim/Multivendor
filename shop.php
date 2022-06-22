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
                <a href="#">Shopping Cart Total price :<?php totalPrice()?>TK,Items:<?php itme()?></a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="cart.php">Goto Cart</a></li>
                    <li><a href="login.php">Login</li>

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
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="shop.php">Shop</a></li>
                            <li><a href="customer/my_account.php">My Account</a></li>
                            <li><a href="cart.php">Shopping Cart</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
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
                                <input type="text" name="user_query" placeholder="search" class="form-control"
                                    required="">
                                <span class="input-group-btn">


                                    <button type="submit" value="Search" name="search" class="btn btn-primary">
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



    <!-- content -->
    <div id="new_content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Shop</li>

                </ul>
            </div>
            <!--  -->
            <div class="col-md-3">
                <?php 
                
                
                include("include/sidebar.php")
                
                ?>
            </div>
            <div class="col-md-9">
               <?php
               if(!isset($_GET['p_cat'])){
                   if(!isset($_GET['id'])){
                       echo "<div class='box'>
                       
                       <h1>Shop</h1>
                       
                       
                       </div>";
                   }

               }
               
               
               
               
               
               
               ?>
               
                <div class="row">
                    <!-- cart start -->
                    <!-- <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">

                            <a href="details.php">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive" alt="">
                                <div class="text">
                                    <h3><a href="details.php">Lorem ipsum dolor sit amet.</a></h3>
                                    <p class="price">$15</p>
                                    <p class="buttons">
                                        <a href="details.php" class="btn btn-default"> View Details</a>
                                        <a href="details.php" class="btn btn-primary"> <i
                                                class="fa fa-shoppinf-cart"></i> Add to cart</a>
                                    </p>
                                </div>
                            </a>
                        </div>

                    </div> -->
                    <!-- cart end -->
                    <!-- cart start -->
                    <?php
                    
                    if(!isset($_GET['p_cat'])){


                        if(!isset($_GET['cat_id'])){
                         
                      $per_page=6;
                      if(isset($_GET['page'])){
                          $page=$_GET['page'];
                      }else{
                          $page=1;
                      }

                          
                       $start_form=($page-1) * $per_page;
                       $get_product="SELECT * from product ORDER BY 1 DESC LIMIT $start_form,$per_page";
                       $run_pro=mysqli_query($con,$get_product);
                       while($row=mysqli_fetch_array($run_pro)){
                         $pro_id=$row['product_id'];
                         $product_title=$row['product_title'];
                         $product_price=$row['product_price'];
                         $product_img=$row['product_img1'];
                         echo "
                         <div class='col-md-4 col-sm-6 center-responsive'>
                         <div class='product'>
                   
                             <a href='details.php?pro_id=$pro_id'>
                                 <img src='admin_area/product_images/$product_img'  height='580px' width='425px'  class='img-responsive' alt=''>
                                 <div class='text-center box'>
                                     <h3>$product_title</h3>
                                     
                                     <p class='price'>Price:$product_price tk</p>
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
                    
                    ?>
                    <!-- cart end -->
                    <!-- pagination -->
                    <center>
                        <ul class="pagination" align="center">
                            <?php 

                        $query="SELECT * FROM product";
                        $result=mysqli_query($con,$query);
                        $total_record=mysqli_num_rows($result);
                        $total_page=ceil($total_record/$per_page);
                        
                        
                        
                        echo "<li><a href='shop.php?page=1'>".'First Page'."</a></li>";
                        for($i=1;$i<=$total_page; $i++){
                            echo "<li><a href='shop.php?page=".$i."'>".$i."</a></li>";    
                        }
                        echo "<li><a href='shop.php?$total_page'>".'Lirst Page'."</a></li>";
                        
                         }}
                        
                        
                        ?>
<!--                             
                            <li><a href="shop.php">Feist page</a></li>
                            <li><a href="shop.php">2</a></li>
                            <li><a href="shop.php">3</a></li>
                            <li><a href="shop.php">4</a></li>
                            <li><a href="shop.php">5</a></li>
                            <li><a href="shop.php">Last page</a></li> -->
                        </ul>
                    </center>
                  
                        <?php
                        
                        getpcatpro();
                        getCatpro()
                        
                        ?>


           
                    <!-- end pagination -->
                </div>
            </div>
        </div>

    </div>

















    <?php  include("include/footer.php");  ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>