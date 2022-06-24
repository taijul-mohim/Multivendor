<div class="box">
    <div class="box-header">
        <center>
            <h2>Login</h2>
        </center>
        <p class="lead"> Already our customer </p>
    </div>
    <form action="" method="post">
        <div class="form-grop">
            <label >Email:</label>
            <input type="email" class="form-control" name="c_email" required=''>

        </div>
       <div class="form-grop">
            <label >Email:</label>
            <input type="password" class="form-control" name="c_pass" required=''>
            
        </div>
    <div class="text-center">
        <button name="login" value="login" class="btn btn-primary">
            <i class="fa fa-sign-in"></i> Login
        </button>
    </div>

    </form>
    <center>
        <a href="customer_register.php">
            <h3>New? Register Now</h3>
        </a>
    </center>
</div>


<?php 
if(isset($_POST['login'])){
    $customer_email=$_POST['c_email'];
    $customer_pass=$_POST['c_pass'];
    $select_customer="SELECT * FROM customer WHERE c_email='$customer_email'AND c_pass='$customer_pass'";
    $sqli=mysqli_query($con,$select_customer);
    $get_ip=getUserIP();
    $chack_customer=mysqli_num_rows($sqli);
    $select_cart="SELECT * FROM cart WHERE p_id='$get_ip'";
    $run_cart=mysqli_query($con,$select_cart);
    $chack_cart=mysqli_num_rows($run_cart);
    if($chack_customer==0){
        echo '<script>alert("Password and email Wrong")</script>' ;
        exit;
    }else{
       
    }
    if($chack_customer==1 AND $chack_cart==0)
    {
$_SESSION['customer_email']=$customer_email;
echo "<script>alert('You are logged in')</script>";
echo'<script>Window.open("customer/my_account.php")</script>';
    }else{
        echo "<script>alert('You are logged in')</script>";
echo'<script>Window.open("chackout.php")</script>';
    }
}






?>