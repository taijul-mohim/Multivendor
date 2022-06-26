<div class="box">

<?php
 $session_email=$_SESSION['customer_email'];
 $select_customer="SELECT * FROM customer WHERE c_email='$session_email'";
$run_cust=mysqli_query($con,$select_customer);
$row_customer=mysqli_fetch_array($run_cust);
$customer=$row_customer['customer_id'];





?>






    <h1 class="text-center">Payment options</h1>
    <p class="lead text-center">
        <a href="order.php?<?php echo $customer ?>">Pay offline</a>
    </p>
  <center>
    <p class="lead">
        <a href="">Bekash
            <img src="images/bkash.png" alt="" width="500" height="270" class="img-responsive">
        </a>
        
    </p>
  </center>
</div>
