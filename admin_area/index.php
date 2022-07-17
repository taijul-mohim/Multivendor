<?php
session_start();
include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{

?>
<?php 
$admin_session=$_SESSION['admin_email'];
$get_admin="SELECT * FROM admin WHERE admin_email='$admin_session'";
$query=mysqli_query($con,$get_admin);
$row=mysqli_fetch_array($query);
$admin_id=$row['admin_id'];
$admin_name=$row['admin_name'];
$admin_email=$row['admin_email'];
$admin_job=$row['admin_job'];
$admin_about=$row['admin_about'];
$admin_contact=$row['admin_contact'];
$admin_img=$row['admin_img'];










$get_pro="SELECT * FROM product";

$run_pro=mysqli_query($con,$get_pro);

$count_pro=mysqli_num_rows($run_pro);
$get_cut="SELECT * FROM customer";
$run_cut=mysqli_query($con,$get_cut);
$count_cust=mysqli_num_rows($run_cut);
$get_p="SELECT * FROM product_categories";
$run_p=mysqli_query($con,$get_p);
$count_p=mysqli_num_rows($run_p);

$get_o="SELECT * FROM customer_order";
$run_o=mysqli_query($con,$get_o);
$count_o=mysqli_num_rows($run_o);





?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- //Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
<body>
    




<div id="wrapper">
    <?php include("includes/sidebar.php") ?>
    <div id="page-wrapper">
        <div class="container-fluid">
<?php

if(isset($_GET['dashboard'])){
    include("dashboard.php");
}
if(isset($_GET['insert_product'])){
    include("insert_product.php");
}
if(isset($_GET['view_product'])){
    include("view_product.php");
}

if(isset($_GET['delete_id'])){
    include("delete_product.php");
}
if(isset($_GET['edit_id'])){
    include("edit_product.php");
}
if(isset($_GET['view_product_cat'])){
    include("view_product_cat.php");
}
if(isset($_GET['insert_product_cat'])){
    include("insert_product_cat.php");
}
if(isset($_GET['delete_p_cat'])){
    include("delete_p_cat.php");
}
if(isset($_GET['edit_p_cat'])){
    include("edit_p_cat.php");
}

if(isset($_GET['insert_cat'])){
    include("insert_cat.php");
}
// categories

if(isset($_GET['view_cat'])){
    include("view_cat.php");
}

if(isset($_GET['edit_cat'])){
    include("edit_cat.php");
}



if(isset($_GET['delete_cat'])){
    include("delete_cat.php");
}
// insert slider 



if(isset($_GET['insert_slider'])){
    include("insert_slider.php");
}

if(isset($_GET['view_customer'])){
    include('view_customer.php');
}


if(isset($_GET['delete_c'])){
    include('delete_c.php');
}


// order

if(isset($_GET['view_order'])){
    include('view_order.php');
}
if(isset($_GET['delete_order'])){
    include('delete_order.php');
}

// payment
if(isset($_GET['view_Payments'])){
    include('view_Payments.php');
}

if(isset($_GET['payment'])){
    include('d_Payments.php');
}
// user 
if(isset($_GET['insert_Users'])){
    include('insert_user.php');
}

// user

if(isset($_GET['view_user'])){
    include('view_user.php');
}

?>
        </div>

    </div>
</div>










<div  id="copyright">
  <div class="container">
      <div class="col-md-6">
          <p class="pull-left">
            &copy; 2021 taijul
          </p>
      </div>
      <div class="col-md-6">
          <p class="pull-right">
           tamplate
          </p>
      </div>
  </div>




 </div>



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



<?php }?> 