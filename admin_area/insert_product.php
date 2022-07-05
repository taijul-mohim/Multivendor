<?php 
include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{



?>

<!DOCTYPE html>
<html lang="en">
<head>
  
<script>tinymce.init({selector:'textarea'});</script>
  
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!-- <div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>
                Dashboard/Insert Product
            </li>

        </div>
    </div>
</div>     -->
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
                     <input type="text" name="product_title" class="form-control" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Category </label>
                     <select name="product_cat" class="form-control" id="">
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
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Image 2</label>
                     <input type="file" name="product_img2" class="form-control" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food Image 3</label>
                     <input type="file" name="product_img3" class="form-control" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Price</label>
                     <input type="text" name="product_price" class="form-control" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">KeyWord </label>
                     <input type="text" name="product_keyword" class="form-control" required=''>
                 </div>
                 <div class="form-group">
                     <label for=" col-md-3 control-lable">Food description </label>
                    <textarea name="product_desc" id="" cols="30" rows="10" class="form-control"></textarea>
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
$insert_product="INSERT INTO product(p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_dec,product_key)
VALUES('$product_cat','$c_cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keyword')";
$sqli=mysqli_query($con,$insert_product);
if($sqli){
  echo "<script>alert('product Insert successfully')</script>"  ;
  echo "<script>window.open('index.php?view_product')</script>";
}
}





?>
<?php }?>