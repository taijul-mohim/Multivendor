<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{


?>




<?php 
if(isset($_GET['delete_order'])){
    $delete_order=$_GET['delete_order'] ;
    $query="DELETE FROM customer_order WHERE order_id=$delete_order";
    $sqli=mysqli_query($con,$query);
    if($sqli){
          echo "<script>alert(' Order  Delete successfully')</script>" ;
           echo "<script>window.open('index.php?view_order','_self')</script>";
    }
}




?>


























<?php }?>