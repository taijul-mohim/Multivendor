<?php 
include("../include/db.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commarce</title>
    
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  
<script>tinymce.init({selector:'textarea'});</script>
    <!-- //Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
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









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>
</html>
<?php
if(isset($_POST['insert'])){
 $product_title=$_POST['product_title'];
 $product_cat=$_POST['product_cat'];
 $c_cat=$_POST['cat'];
 $product_price=$_POST['product_price'];
 $product_keyword=$_POST['product_keyword'];
 $product_desc=$_POST['product_desc'];
 $poduct_img1=$_FILES['product_img1']['name'];
  $poduct_img2=$_FILES['product_img2']['name'];
 $poduct_img3=$_FILES['product_img3']['name'];
 $temp_name1=$_FILES['product_img1']['tmp_name'];
 $temp_name2=$_FILES['product_img2']['tmp_name'];
 $temp_name3=$_FILES['product_img3']['tmp_name'];

 move_uploaded_file($temp_name1,"product_images/ $poduct_img1");
 move_uploaded_file($temp_name2,"product_images/ $poduct_img2");
 move_uploaded_file($temp_name3,"product_images/ $poduct_img3");
 $insert="INSERT INTO `product` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_dec`, `product_key`) 
 VALUES ('','$product_cat',  '$c_cat', NOW(), ' $p_title', '$poduct_img1', '$poduct_img1', '$poduct_img2', '$poduct_img3', '$product_price', '$product_desc','$product_keyword')";
 $sqli=mysqli_query($con,$insert);
 if($sqli==true){
     echo "done";
 }else{
     echo "DONE";
 }
}





?>