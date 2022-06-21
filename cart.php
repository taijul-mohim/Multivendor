<?php 

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
                <a href="#" class="btn btn-success btn-sm">Wellcome Guest</a>
                <a href="#">Shopping Cart Total price :<?php totalPrice()?>TK,Items:2</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="checkout.php">My Account</a></li>
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
    <div id="new_content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Shoping cart</li>

                </ul>
            </div>
            <!--  -->
            <div class="col-md-9" id="cart">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart-form-data">
                        <h1>Shopping Cart</h1>
                           <?php 

                           $ip_add=getUserIP();
                            $select_cart="SELECT * FROM cart WHERE ip_add='$ip_add'";
                            $run_cart=mysqli_query($con,$select_cart);
                            $count=mysqli_num_rows($run_cart);
                           
                           
                           
                           ?>

                        <p class="text-muted"> cruntly you have <span class="text-primary"><?php echo $count ?></span>  items in your cart </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit price</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $total=0;
                                    while($row=mysqli_fetch_array($run_cart)){
                            $pro_id=$row['p_id'];
                            $pro_size=$row['size'];
                            $pro_qty=$row['qty'];
                            $get_product="SELECT * FROM product WHERE product_id='$pro_id'";
                            
                            $run_pro=mysqli_query($con,$get_product);
                            while($row=mysqli_fetch_array($run_pro)){
                               $pro_title=$row['product_title'];
                               $pro_img1=$row['product_img1'];
                               $pro_price=$row['product_price'];
                               $sub_total=$row['product_price'] * $pro_qty;
                               $total +=$sub_total;



                               
                                    
                                    ?>


                                    <tr>
                                        <td scope="row"><img src="admin_area/product_images/<?php echo $pro_img1?>" width="50px" alt="">
                                        </td>
                                        <td><?php echo $pro_title?></td>
                                        <td><?php echo $pro_price?>tk</td>
                                        <td><?php echo $pro_qty?></td>
                                        <td><input type="checkbox" name="remove[]" value='<?php echo $pro_id?>'></td>
                                        <td><?php echo $sub_total?>tk</td>
                                    </tr>
                                    <?php
                                    
                                        }}
                                    ?>
                                </tbody>
                                <tfoot>
                                    <th colspan="5">total</th>
                                    <th colspan="2"><?php echo $total?>tk</th>
                                </tfoot>
                            </table>
                        </div>
                        <!-- end table -->
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i>Continue Shoping
                                </a>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                    <i class="fa fa-refresh"></i>Update cart
                                </button>
                                <a href="checkout.php" class="btn btn-primary">Proceed to chackpoint</a>
                            </div>
                        </div>
                    </form>
                    
                </div>

<!-- cart delet -->
<?php
function update_cart(){
    global $con;
    if(isset($_POST['update'])){
        foreach($_POST['remove'] as $remove){
            $delet="DELETE FROM cart Where p_id='$remove'";
            $run_del=mysqli_query($con,$delet);
            if($run_del){
                echo "<script>alert('DELETE Successfully')</script>";
                echo "<script>window.open('cart.php','_self')</script>";
 
            }else{
                echo 'not done';
            }
        }
    }





}
echo $dl=update_cart();

?>



                  <!-- uggestion bar -->
               <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline ">
                            <h3 class="text-center"> You also like those Food</h3>

                        </div>

                    </div>
                <!-- food -->

                <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product">

                            <a href="details.php">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive" alt="">
                                <div class="text">
                                    <h3 class="text-center"><a href="details.php">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, ut?</a></h3>
                                    <p class="price text-center ">$15</p>
                                </div>
                            </a>
                        </div>

                    </div>


                   <!-- <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                        <img src="admin_area/product_images/1.jpg" hight='220' width="220" alt="">

                                
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Mardaz food</a></h3>
                                <p class="price">250tk</p>
                            </div>
                        </div>
                   </div> -->
                   <!-- <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                        <img src="admin_area/product_images/1.jpg" width="220" alt="">

                                
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Mardaz food</a></h3>
                                <p class="price">250tk</p>
                            </div>
                        </div>
                   </div> -->
                   <!-- <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                        <img src="admin_area/product_images/1.jpg"width="220" alt="">

                                
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Mardaz food</a></h3>
                                <p class="price">250tk</p>
                            </div>
                        </div>
                   </div> -->
                   <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product">

                            <a href="details.php">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive" alt="">
                                <div class="text">
                                    <h3 class="text-center"><a href="details.php">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, ut?</a></h3>
                                    <p class="price text-center ">$15</p>
                                </div>
                            </a>
                        </div>

                    </div>
                     <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product">

                            <a href="details.php">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive" alt="">
                                <div class="text">
                                    <h3 class="text-center"><a href="details.php">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, ut?</a></h3>
                                    <p class="price text-center ">$15</p>
                                </div>
                            </a>
                        </div>

                    </div>
              </div>

            </div>
            <!-- new colam -->
            <div class="col-md-3">
                <div class="box" id="order-summary">
                 <h3>Order Summary</h3>
                 <p class="text-muted">
                  Shopping and additionnal costs are calculated based on the values you have entered
                </p>
                 <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order Subtotal</td>
                                <th><?php echo $total?>tk</th>
                            </tr>
                            <tr>
                                <td>Shipping and handling</td>
                                <td>150 tk</td>
                            </tr>
                            <tr>
                                <td>
                                    taxt
                                </td>
                                <td>150tk</td>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th>150tk</th>
                            </tr>
                        </tbody>

                    </table>
                </div>
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