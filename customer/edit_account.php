<?php 



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
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Customer Name</label>
         <input type="text" name="c_name" class="form-control" value="<?php echo $c_name?>" required="">
    </div>
    <div class="form-group">
        <label for="">Customer Email</label>
         <input type="email" name="c_email" class="form-control" value="<?php echo $c_email?>" required="">
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
        <label for="">House NO</label>
         <input type="text" name="c_address" class="form-control"  value="<?php   echo  $c_adress?>" required="">
    </div>
    <div class="form-group">
        <label for="">Customer Image</label>
        <input type="file" name="c_img" class="form-control" >
         <img src="c_images/img/<?php echo $c_img?>" class="img-responsive" height="100" width="100" alt="">
    </div>
    <div class="text-center">
        <button class="btn btn-primary" name="update">
Update Now
        </button>
    </div>

    </form>






</div>






<?php
if(isset($_POST['update'])){
    $update_id=$customer_id;
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_area=$_POST['c_area'];
    $c_nmbr=$_POST['c_nmbr'];
    $c_adress=$_POST['c_address'];
    // $c_img=$_FILES['c_img']['name'];
    // $temp=$_FILES['c_img']['tmp_name'];
    // $img=$_FILES['img'];
    // $c_img_tmp=$_FILES['c_img']['tmp_name'];
    // move_uploaded_file($c_img_tmp,"c_images/img/$c_img");
    $update="UPDATE customer SET c_name='$c_name',c_email='$c_email',c_area='$c_area',c_contact='$c_nmbr',c_address='$c_adress' WHERE  customer_id='$update_id'";
    $run_customer=mysqli_query($con,$update);
    
    if($run_customer){
        echo "<script>alert('Your details update .')</script>"  ;
        echo "<script>window.open('../logout.php','_self')</script>";
    }

}







?>







