<div class="box">
    <center>
        <h1>Change your Password</h1>
    </center>
    <form action="" method="post">
    <div class="form-group">
        <label for="">Enter your cruent Password</label>
        <input type="Password" name="old_pass" class="form-control" required=''>
    </div>
    <div class="form-group">
        <label for="">Enter your New password</label>
        <input type="Password" name="new_pass" class="form-control" required=''>
    </div>
    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="Password" name="c_n_pass" class="form-control" required=''>
    </div>
    <div class="text-center">
        <button class="btn btn-primary" name="update">
            Change Pass
        </button>
    </div>
</div>

</form>

<?php
if(isset($_POST['update'])){
    $c_email=$_SESSION['customer_email'];
    $old_pass=$_POST['old_pass'];
    $new_pass=$_POST['new_pass'];
    $c_n_pass=$_POST['c_n_pass'];
    $select_cust="SELECT * FROM customer WHERE c_email='$c_email' AND c_pass='$old_pass' ";
    $run_q=mysqli_query($con,$select_cust);
    $check_old_pass=mysqli_num_rows($run_q);
    if($check_old_pass==0){
        echo "<script>alert('Your Current password is not valid')</script>" ;
        exit();
    }


     if($new_pass!=$c_n_pass){
         echo "<script>alert('Your new password does not match With confirm password')</script>" ;
         exit ();
     }
   $update_q="UPDATE customer SET c_pass='$new_pass' WHERE c_email='$c_email'";
   $run_q=mysqli_query($con,$update_q);
   echo "<script>alert('Your Changed')</script>";
   echo "<script>window.open('my_account>php?my_order')</script>";


}










?>