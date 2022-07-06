<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{

?>
<?php 
if(isset($_GET['delete_id'])){
    $delete_id=$_GET['delete_id'] ;
    $query="DELETE FROM product WHERE product_id=$delete_id";
    $sqli=mysqli_query($con,$query);
    if($sqli){
          echo "<script>alert('product Delete successfully')</script>" ;
           echo "<script>window.open('index.php?view_product','_self')</script>";
    }
}




?>








    <?php }?>