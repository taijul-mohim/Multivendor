<?php 
session_start();
include("include/db.php");
include("function/function.php");
?>
<?php
if(isset($_GET['pro_id'])){
 $pro_id=$_GET['pro_id'];
  $get_product="SELECT * FROM product WHERE product_id='$pro_id'";
  $run_pro=mysqli_query($con,$get_product);
  $row=mysqli_fetch_array($run_pro);
  $p_category_id=$row['p_cat_id'];
  $product_title=$row['product_title'];
  $p_price=$row['product_price'];
  $p_desc=$row['product_dec'];
  $p_img1=$row['product_img1'];
  $p_img2=$row['product_img2'];
  $p_img3=$row['product_img3'];
//   $get_p_cat="SELECT * FROM product_categories WHERE p_cat_id='$p_category_id' ";
//   $sqli=mysqli_query($con,$get_p_cat);
//   $c_row=mysqli_fetch_array($sqli);
//   $p_cat_id=$c_row['p_cat_id'];
//   $p_title=$c_row['p_cat_title'];
//   $p_desc=$c_row['p_cat_desc'];



 }



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
                    <li><?php if(!isset($_SESSION['customer_email'])){ echo "<a href='checkout.php'>My account</a>";}else{echo '<a href="customer/my_account.php?my_order">My account</a>';}?>
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
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="shop.php">Shop</a></li>
                            <li><?php if(!isset($_SESSION['customer_email'])){ echo "<a href='checkout.php'>My account</a>";}else{echo '<a href="customer/my_account.php?my_order">My account</a>';}?>
                            </li>
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
                                <input type="text" name="search" placeholder="search" class="form-control" required="">
                                <span class="input-group-btn">


                                    <button type="submit" value="Search" class="btn btn-primary">
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
                    <li><a href="shop.php?p_cat=<?php echo $p_cat_id?>"></a><?php echo $product_title?></li>


                </ul>
            </div>
            <!--  -->
            <div class="col-md-3">
                <?php 
                
                
                include("include/sidebar.php")
                
                ?>
            </div>
            <!-- product menu -->
            <div class="col-md-9">
                <div class="row" id="productmain">
                    <div class="col-sm-6">
                        <div id="mainimage">
                            <!-- <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel" data-slide-to="1"></li>
                                    <li data-target="#mycarousel" data-slide-to="2"></li>
                                </ol>
                            </div>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center>
                                        <img src="admin_area/product_images/burger.jpg" class="img-responsive" alt="">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img src="admin_area/product_images/momo.jpg" class="img-responsive" alt="">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img src="admin_area/product_images/pizza.jpg" class="img-responsive" alt="">
                                    </center>
                                </div>

                            </div>
                            <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a> -->



                            <div class="w3-content w3-display-container">
                                <img class="mySlides" src="admin_area/product_images/<?php echo $p_img1?>"
                                    height="500px" style="width:100%">
                                <img class="mySlides" src="admin_area/product_images/<?php echo $p_img2?>"
                                    height="500px" style="width:100%">
                                <img class="mySlides" src="admin_area/product_images/<?php echo  $p_img3?>"
                                    height="500px" style="width:100%">
                                <div align="center">
                                    <button class="w3-button w3-black w3-display-left"
                                        onclick="plusDivs(-1)">&#10094;</button>
                                    <button class="w3-button w3-black w3-display-right"
                                        onclick="plusDivs(1)">&#10095;</button>
                                </div>
                            </div>

                            <script>
                                var slideIndex = 1;
                                showDivs(slideIndex);

                                function plusDivs(n) {
                                    showDivs(slideIndex += n);
                                }

                                function showDivs(n) {
                                    var i;
                                    var x = document.getElementsByClassName("mySlides");
                                    if (n > x.length) {
                                        slideIndex = 1
                                    }
                                    if (n < 1) {
                                        slideIndex = x.length
                                    }
                                    for (i = 0; i < x.length; i++) {
                                        x[i].style.display = "none";
                                    }
                                    x[slideIndex - 1].style.display = "block";
                                }
                            </script>


                        </div>
                    </div>
                    <!-- end cal sm 6 -->


                    <?php 
                    
                    
                    addCart()
                    
                    ?>
                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center"><?php echo $product_title ;?></h1>
                            <form action="details.php?add_cart=<?php echo $pro_id?>" method="post"
                                class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Quantity</label>
                                    <div class="col-md-7">
                                        <select name="product_qty" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>




                                        </select>
                                    </div>
                                    <br>
                                    <br>

                                    <!-- Product size -->
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Product Size</label>
                                        <div class="col-md-7">
                                            <select name="product_size" class="form-control">
                                                <option>Select a size</option>
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                                <option>Extra large</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- price -->
                                <p class="price text-center">price :<?php echo $p_price;?> TK</p>
                                <p class="text-center buttons">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"></i>Add To cart
                                    </button>
                                </p>
                            </form>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo  $p_img1?>" height="100" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo  $p_img2?>" height="100" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo  $p_img3?>" height="100" alt="">
                            </a>
                        </div>
                    </div>


                </div>
                <!-- start -->
                <div class="box" id="details">
                    <h4>Product Details</h4>
                    <p><?php echo $p_desc?></p>
                    <h4>Size</h4>
                    <ul>
                        <li> small</li>
                        <li>Medium</li>
                        <li> Large</li>

                    </ul>
                </div>
                <!-- uggestion bar -->
                <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline ">
                            <h3 class="text-center"> You also like those Food</h3>

                        </div>

                    </div>
                    <!-- food -->
                    <?php
                  $get_product="SELECT * FROM product ORDER BY 1 LIMIT 0, 3 ";
                  $run_product=mysqli_query($con,$get_product);
                  while($row=mysqli_fetch_array($run_product)){
                      $pro_id=$row['product_id'];
                      $product_title=$row['product_title'];
                      $product_price=$row['product_price'];
                      $p_img1=$row['product_img1'];


                      ?>

                    <div class="col-md-3 col-sm-6 center-responsive ">
                        <div class="product ">

                            <a href='details.php?pro_id=<?php echo $pro_id?>'>
                                <img src='admin_area/product_images/<?php echo $p_img1?>' height='580px' width='425px'
                                    class='img-responsive' alt=''>
                                <div class='text box text-center'>
                                    <h3><?php echo $product_title?></h3>

                                    <p class='price'><?php echo $product_price?> tk</p>
                                </div>
                            </a>
                        </div>

                    </div>

                    <?php }?>





                </div>




                <!-- start -->
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