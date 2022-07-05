<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{

?>
<?php 
if(isset($_GET['delete_id'])){
    echo "done" ;
}




?>








    <?php }?>