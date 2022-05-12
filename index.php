<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commarce</title>
        <!-- //Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <div id="top"> <!--top bar  -->
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
                  <a href="index.php" class="navbar-brand" >
                      <img src="images/logo.png " alt="teehosting"   height="40px" class="hidden-xs thumble" >
                      <img src="images/logo.png " alt="teehosting"  class="visible-xs">
                  </a>
                  <button type="button" class="navbar-toggle" data-toggle="collaps" data-target="#navigation">
                      <span class="sr-only">Toggle Navigation</span>
                      <i class="fa fa-align-justify"></i>

                  </button>
                  <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                   <span class="sr-only"></span>
                   <i class="fa fa-search"></i>
                  </button>
              </div>
            <!-- menu -->
            <div class="navbar-collapse collapse " id="navigation">
                <!-- start nav -->
                <div class="padding-nav">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                         

                    </ul>
                </div>
                <!-- end nav -->

            </div>


          </div>
       </div>
   </div>
   <!-- nav bar end -->







<!-- //jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>
</html>