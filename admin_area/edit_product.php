<?php 
include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{
if(isset($_GET['edit_id'])){
    $edit_id=$_GET['edit_id'];
    $get_product="SELECT * FROM product WHERE product_id='$edit_id'";
    $query=mysqli_query($con,$get_product);
    $row=mysqli_fetch_array($query);
    $pro_id=$row['product_id'];
    $p_title=$row['product_title'];
    $p_cat=$row['p_cat_id'];
    $cat=$row['cat_id'];
    $p_img1=$row['product_img1'];
    $p_img2=$row['product_img2'];
    $p_img3=$row['product_img3'];
    $p_price=$row['product_price'];
    $p_desc=$row['product_dec'];
    $p_key=$row['product_key'];




}




$get_p_cat="SELECT * from product_categories WHERE p_cat_id='$p_cat'";
$sqli=mysqli_query($con,$get_p_cat);
$row=mysqli_fetch_array($sqli);
    $p_c_title=$row['p_cat_title'];

    $get_cat="SELECT * from categories WHERE cat_id='$p_cat'";
    $sqli=mysqli_query($con,$get_cat);
    $row=mysqli_fetch_array($sqli);
    
        $c_title=$row['cat_title'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
  
<script>tinymce.init({selector:'textarea'});</script>
  
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <center>
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>
                Dashboard/Insert Product
            </li>

        </div>
    </div>
</div>    
</center>
<!--  -->
<div class="row" >
   <div class="col-lg-3">

   </div>
    <div class="col-lg-6">
        <div class="panel panel-deault">
            <div class="panel-heading">
                    <h3 class="panel-title">
       <i class="fa a-money fa-w"></i>Insert Food 
                    </h3>
            </div>
            <!-- end panel -->
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Title</label>
                     <input type="text" name="product_title" class="form-control" value="<?php echo $p_title?>" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Category </label>
                     <select name="product_cat" class="form-control" id="">
                        <option value=""> <?php echo $p_c_title?></option>
                     <option value=" ">Select a Food Category</option>
                     
                         <?php
                         $get_cat="SELECT * from product_categories";
                         $sqli=mysqli_query($con,$get_cat);
                         while($row=mysqli_fetch_array($sqli)){
                             $id=$row['p_cat_id'];
                             $p_title=$row['p_cat_title'];
                             $p_desc=$row['p_cat_desc'];

                


                 echo"<option value='$id'> $p_title</option>" ;

                         }
                         
                         
                         
                         ?>
                     </select>
                 </div>
                 <!-- categories -->
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Categories</label>
                     <select name="cat" class="form-control" id="">
                        <option value=""><?php echo $c_title?></option>
                     <option value=" "> Select Category</option>
                     
                         <?php
                         $get_cat="SELECT * from categories";
                         $sqli=mysqli_query($con,$get_cat);
                         while($row=mysqli_fetch_array($sqli)){
                             $id=$row['cat_id'];
                             $c_title=$row['cat_title'];
                             $c_desc=$row['cat_decs'];

                


                 echo"<option value='$id'> $c_title</option>" ;

                         }
                         
                         
                         
                         ?>
                     </select> 
                    
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Image 1</label>
                     <input type="file" name="product_img1" class="form-control" required=''>
                     <img src="product_images/<?php echo $p_img1?>" height="50" width="50" alt="">
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Image 2</label>
                     <input type="file" name="product_img2" class="form-control" required=''>
                     <img src="product_images/<?php echo $p_img2?>" height="50" width="50" alt="">
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Image 3</label>
                     <input type="file" name="product_img3" class="form-control" required=''>
                     <img src="product_images/<?php echo $p_img1?>" height="50" width="50" alt="">
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Price</label>
                     <input type="text" name="product_price" class="form-control" value="<?php echo $p_price?>" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">KeyWord </label>
                     <input type="text" name="product_keyword" class="form-control" value="<?php echo $p_key?>" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food description </label>
                    <textarea name="product_desc" id="" cols="30" rows="10" class="form-control"> <?php echo $p_desc?></textarea>
                 </div>
                 <div class="form-group">
                      <button class="btn btn-info form-control" name='insert'>
                        Insert
                      </button>
                 </div>
                </form>
            </div>

        </div>
    </div>
    <div class="col-lg-3">

    </div>
</div>









</body>
</html>


<?php

if(isset($_POST['insert'])){
 $product_title=$_POST['product_title'];
 $product_cat=$_POST['product_cat'];
 $c_cat=$_POST['cat'];
 $product_price=$_POST['product_price'];
 $product_desc=$_POST['product_desc'];
 $product_keyword=$_POST['product_keyword'];

$product_img1=$_FILES['product_img1']['name'];
$product_img2=$_FILES['product_img2']['name'];
$product_img3=$_FILES['product_img3']['name'];
$temp_name1=$_FILES['product_img1']['tmp_name'];
$temp_name2=$_FILES['product_img2']['tmp_name'];
$temp_name3=$_FILES['product_img3']['tmp_name'];

move_uploaded_file($temp_name1,"product_images/img/$product_img1");
move_uploaded_file($temp_name2,"product_images/img/$product_img2");
move_uploaded_file($temp_name3,"product_images/img/$product_img3");

}




?>

<?php   }?>