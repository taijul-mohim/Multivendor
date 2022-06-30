<div class="box">
    <center>
        <h1>Do you really want to delete your account</h1>
  
    <form action=""  method="post">
        <input type="submit" name="yes" value="Yes, I want to delete" class="btn btn-danger ">
        <input type="submit" name="no" value="NO, I Dont want to delete" class="btn btn-primary">




    </form>
    </center>
</div>



<?php
$c_email=$_SESSION['customer_email'];
if(isset($_POST['yes'])){
    $delet_q="DELETE FROM customer WHERE c_email='$c_email'";
    $run=mysqli_query($con,$delet_q);
    if($run){
        session_destroy();
        echo"<script>alert('Your account has been deleted')</script>";
        echo "<script>window.open('../index.php?my_order','_self')</script>";
    }
}








?>