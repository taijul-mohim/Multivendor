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
                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="cart.php">Go to Cart</a></li>
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
                            <li ><a href="shop.php">Shop</a></li>
                            <li><a href="customer/my_account.php">My Account</a></li>
                            <li><a href="cart.php">Shopping Cart</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li ><a href="contactus.php">Contact us</a></li>


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



    <!-- content -->
    <div id="new_content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Registration</li>

                </ul>
            </div>
            <!--  -->
            <div class="col-md-3">
                <?php 
                
                
                include("include/sidebar.php")
                
                ?>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Customer Registration</h2>
                        </center>
                    </div>
                    <!-- form -->
                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" > Customer Name</label>
                            <input type="text" name="c_name" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Customer Email</label>
                            <input type="email" name="c_email" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Customer Password</label>
                            <input type="password" name="c_password" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="email" name="c_country" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="email" name="c_city" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Contract Number</label>
                            <input type="email" name="c_number" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Adress</label>
                            <input type="text" name="c_adress" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Adress</label>
                            <input type="file" name="c_image" required="" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Register</button>
                        </div>


                    </form>
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