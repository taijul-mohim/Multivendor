<div class="box">

<?php
 $session_email=$_SESSION['customer_email'];
 $select_customer="SELECT * FROM customer WHERE c_email='$session_email'";
$run_cust=mysqli_query($con,$select_customer);
$row_customer=mysqli_fetch_array($run_cust);
$c_id=$row_customer['customer_id'];





?>






    <h1 class="text-center">Payment options</h1>
    <p class="lead text-center">
        <a href="order.php?c_id=<?php echo $c_id ?>">Pay offline</a>
    </p>
  <center>
    <p class="lead">
        <a href="">Bkash
            <img src="images/bkash.png" alt="" width="500" height="270" class="img-responsive">
        </a>
        
    </p>
  </center>
</div>
