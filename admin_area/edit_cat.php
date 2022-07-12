<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{


if(isset($_GET['edit_cat'])){
    $edit_id=$_GET['edit_cat'];
   $query="SELECT * FROM product_categories WHERE p_cat_id='$edit_id'";
   $sqli=mysqli_query($con,$query);
   $row=mysqli_fetch_array($sqli);
   $p_c_title=$row['p_cat_title']; 
   $p_c_desc=$row['p_cat_desc']; 
}






?>
<center>
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>
                Dashboard/Edit Product Categories
            </li>

        </div>
    </div>
</div>    


<div class="row container">
    <div class="col-lg-12">
       <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
            <i class="fa fa-money fa-fw"></i>Insert Product Categories
            </h3>
        </div>
        <!-- end -->
          <div class="panel-body">
        
            <form action=" " method="post">
            <div class="form-group">
                <div class="col-md-6">
                    <label >Product Category Title</label>
                </div>
                <div class="col-md-6">
                <input type="text" name="p_cat_title" class="form-control" required=' ' value="<?php echo $p_c_title?>">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-md-6">
                    <label >Product Category Description</label>
                </div>
                <div class="col-md-6">
                <textarea name="p_cat_desc" class="form-control" id="" cols="30" rows="10" required=''  > <?php echo $p_c_desc?></textarea>
                    </div>
                  
            </div>
             <br>
             <br>
             <br>
             <br>
            <div class="form-group">
                <div class="col-md-6">
                  
                </div>
                <div class="col-md-6 mt-2" >
                <button  name="submit" class=" form-control btn btn-primary" >
                    Submit
                </button>
                    </div>
            </div>




            </form>


    <?php 
    
    if(isset($_POST['submit'])){
        $p_c_title=$_POST['p_cat_title'] ;
        $p_c_desc=$_POST['p_cat_desc'];
        $query="UPDATE product_categories SET p_cat_title='$p_c_title' ,p_cat_desc='$p_c_desc' WHERE p_cat_id='$edit_id'";
        $sqli=mysqli_query($con,$query);
        if($sqli){
            echo "<script>alert('product Category Update  successfully')</script>"  ;
            echo "<script>window.open('index.php?view_product_cat','_self')</script>";
          }
    }
    
    
    
    
    ?>





          </div>
       </div>
    </div>
</div>    






</center>






















<?php }?>