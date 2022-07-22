<?php 

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('../checkout.php','_self')</script>";

}else{

?>

<div class="panel panel-default sidebar-menu">
   <div class="panel-heading">
  <?php
  $session_customer=$_SESSION['customer_email'];
  $get_cust="SELECT * FROM customer WHERE c_email='$session_customer' ";
  $query=mysqli_query($con,$get_cust);
  $c_row=mysqli_fetch_array($query);
   $c_name=$c_row['c_name'];
    $c_img=$c_row['c_img'];
  if(!isset($_SESSION['customer_email'])){

  }else{
    echo "<center>
    <img src='c_images/img/$c_img' height='150px' width='150px'alt=''>

</center>
<br>
<h3 align='center' class='panel-title'>Name: $c_name </h3>";
  }
  
  
  
  
  
  
  ?>





       
   </div>
   <div class="panel-body">
       <ul class="nav nav-pills nav-stacked">
       <li class="<?php if(isset($_GET['my_order'])){echo "active";}?>">
           <a href="my_account.php?my_order"> <i class="fa fa-list"></i>  My order</a>
       </li>
       <li class="<?php if(isset($_GET['pay_offline'])){echo "active";};?>">
           <a href="my_account.php?pay_offline"> <i class="fa fa-bolt"></i>Pay Offline</a>
       </li>
       <li class="<?php if(isset($_GET['edit_account'])){echo "active";};?>">
           <a href="my_account.php?edit_account"> <i class="fa fa-pencil"></i>Edit Account</a>
       </li>
       <li class="<?php if(isset($_GET['change_pass'])){echo "active";};?>">
           <a href="my_account.php?change_pass"> <i class="fa fa-user"></i>Change Password</a>
       </li>
       <li class="<?php if(isset($_GET['delete_account'])){echo "active";};?>">
           <a href="my_account.php?delete_account"> <i class="fa fa-trace-o"></i>Delete Account</a>
       </li>
       <li class="<?php if(isset($_GET['logout'])){echo "active";};?>">
           <a href="my_account.php?logout"> <i class="fa fa-sign-out"></i>Loge Out</a>
       </li>
       </ul>
   </div>
</div>
<?php }?>