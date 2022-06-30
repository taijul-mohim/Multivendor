<?php 
if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('../checkout.php','_self')</script>";

}else{


$customer_email=$_SESSION['customer_email'];
$get_cust="SELECT * FROM customer WHERE c_email='$customer_email'";
$query=mysqli_query($con,$get_cust);
$row=mysqli_fetch_array($query);
$customer_id=$row['customer_id'];
$c_name=$row['c_name'];
$c_email=$row['c_email'];
$c_area=$row['c_area'];
$c_pass=$row['c_pass'];
$c_contact=$row['c_contact'];
$c_adress=$row['c_address'];
$c_img=$row['c_img'];


?>

<div class="box">
    <center>
        <h1>Edit your Account</h1>
    </center>
    <form action="" method="post">
    <div class="form-group">
        <label for="">Customer Name</label>
         <input type="text" name="c_name" class="form-control" value="<?php echo $c_name?>" required="">
    </div>
    <div class="form-group">
        <label for="">Customer Email</label>
         <input type="email" name="c_email" class="form-control" value="<?php echo $c_email?>" required="">
    </div>
    <div class="form-group">
        <label for="">Customer Password</label>
         <input type="Password" name="c_pass" class="form-control"   value="<?php echo $c_pass?>" required="">
    </div>
    <div class="form-group">
        <label for="">Customer Area</label>
         <input type="text" name="c_area"  class="form-control"  value="<?php echo $c_area?>" required="">
    </div>

    <div class="form-group">
        <label for="">Customer Number</label>
         <input type="number" name="c_nmbr" class="form-control" value="<?php echo $c_contact?>" required="">
    </div>
    <div class="form-group">
        <label for="">Customer Address</label>
         <input type="text" name="c_address" class="form-control"  value="<?php   echo  $c_adress?>" required="">
    </div>
    <div class="form-group">
        <label for="">Customer Image</label>
         <input type="file" name="c_image" class="form-control" required="">
         <img src="c_images/img/<?php echo $c_img?>" class="img-responsive" height="100" width="100" alt="">
    </div>
    <div class="text-center">
        <button class="btn btn-primary" name="update">
Update Now
        </button>
    </div>

    </form>
<?php
if(isset($_POST['update'])){
    $update_id=$customer_id;
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_pass=$_POST['c_pass'];
    $c_area=$_POST['c_area'];
    $c_nmbr=$_POST['c_nmbr'];
    $c_adress=$_POST['c_address'];
}







?>





</div>











<?php }?>