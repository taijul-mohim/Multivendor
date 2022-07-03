<?php
session_start();
include("includes/db.php");




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

<body style="background-color: rgba(10, 242, 223) ; color:aliceblue">


    <div class="container" style="margin-top: 100px;">


        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="box" style="background-color:#fff;  border: 2px solid rgba(10, 242, 223) ; border-radius: 25px; color:black">

               

                <form action="" method="post">
                    <center>
                        <h1 class="text-info">Admin Login</h1>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control"  name="admin_email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="admin_pass" class="form-control" placeholder="Password"  required="">
                    </div>
        
                    <button type="submit" name="admin_login" style=" border-radius: 15px; " class=" form-control btn btn-primary">Admin Login</button>
                     <h4 class="forgot-password">
                        <a href="forhot_password.php">Forgot Password</a>
                     </h4>
                    </center>
                </form>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>


    </div>


 <?php 
 if(isset($_POST["admin_login"])){
   $admin_email=mysqli_real_escape_string($con,$_POST['admin_email']);
   $admin_pass=mysqli_real_escape_string($con,$_POST['admin_pass']);

   $get_admin="SELECT * FROM admin WHERE admin_email='$admin_email' AND admin_pass='$admin_pass'";
   $quary=mysqli_query($con,$get_admin);
   $count=mysqli_num_rows($quary);
   if($count==1){
     $_SESSION['admin_email']=$admin_email;
     echo"<script>alert('You are loge')</script>";
     echo"<script>window.open('index.php?dashboard','_self')</script>";
   }else{
      echo"<script>alert('Your password Wrong')</script>";
   }
 }
 
 
 
 
 
 
 
 ?>

     
















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