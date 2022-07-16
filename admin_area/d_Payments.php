<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{


?>




<?php 
if(isset($_GET['payment'])){
    $delete_cat=$_GET['payment'] ;
    $query="DELETE FROM payment WHERE payment_id=$delete_cat";
    $sqli=mysqli_query($con,$query);
    if($sqli){
          echo "<script>alert('product Categories Delete successfully')</script>" ;
           echo "<script>window.open('index.php?view_Payments','_self')</script>";
    }
}




?>


























<?php }?>