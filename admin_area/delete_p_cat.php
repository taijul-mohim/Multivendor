<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{


?>




<?php 
if(isset($_GET['delete_cat'])){
    $delete_cat=$_GET['delete_cat'] ;
    $query="DELETE FROM product_categories WHERE p_cat_id=$delete_cat";
    $sqli=mysqli_query($con,$query);
    if($sqli){
          echo "<script>alert('product Categories Delete successfully')</script>" ;
           echo "<script>window.open('index.php?view_product_cat','_self')</script>";
    }
}




?>


























<?php }?>