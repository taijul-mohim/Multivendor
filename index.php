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
                <a href="#">Shopping Cart TOtal price :$120,Items:2</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">GOto Cart</a></li>
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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
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
                        <span>4 Items In cart</span>
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




    <!-- slider -->
    <div class="container" id="slider">
        <div class="col-md-12">
            <!-- <div class="carousel slider" id="myCarousel" data-ride="">
               <ol class="carousel-indicaters">
                   <li data-target="myCarousel" data-slide-to='0' class="active"></li>
                   <li data-target="myCarousel" data-slide-to='1' ></li>
                   <li data-target="myCarousel" data-slide-to='2' ></li>
                   <li data-target="myCarousel" data-slide-to='3' ></li>

               </ol>
               <div class="carousel-inner img">
                   <div class="item-active">
                       <img src="cover/1_nKSANcE0nTsmnFY3w4O1dQ.png" alt="">
                   </div>
                   <div class="item">
                       <img src="" alt="">
                   </div>
                   <div class="item">
                       <img src="" alt="">
                   </div>
                   <div class="item">
                       <img src="" alt="">
                   </div>
               </div>
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a href="#myCarousel" class="left carousel-control" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
               </a>
            </div> -->

            <div class="w3-content w3-display-container">
                <?php
            $get_slider="SELECT * FROM slider";
            $run_slider=mysqli_query($con,$get_slider);
            while($row=mysqli_fetch_array($run_slider)){
                $id=$row["id"];
                $slider_name=$row['slider_name'];
                $slider_image=$row['slider_image'];



         

?>


                <img class="mySlides" src="admin_area/slider_images/<?php echo $slider_image?>" height="500px"
                    style="width:100%">

                <?php }?>


                <div  align="center">
                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
    <!--advantange  -->
    <div id="advantage">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                           
                            <h3><a href="">Best PRICE</a></h3>
                            <p>You can check on all others sits about the pricces and than compire with o</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                          
                            <h3><a href="">1005 SATISFACTION GUARANTEED FROM US</a></h3>
                            <p>Free returns on everythings for 3 months</p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
        
                            <h3><a href="">WE LOVE OUR CUSTOMER</a></h3>
                            <p>We are known to best possible services</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- hot box -->
    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Letest This week</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
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
         

    
                       <?php 
                       
                       getpro();
                       
                       
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