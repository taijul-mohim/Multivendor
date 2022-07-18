<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{

?>
<?php 
if(isset($_GET['d_admin'])){
    $delete_id=$_GET['d_admin'] ;
    $query="DELETE FROM admin WHERE admin_id=$delete_id";
    $sqli=mysqli_query($con,$query);
    if($sqli){
          echo "<script>alert(' Delete successfully')</script>" ;
           echo "<script>window.open('login.php','_self')</script>";
    }
}




?>








    <?php }?>