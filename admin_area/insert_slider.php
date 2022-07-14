<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{







?>
<center>
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>
                Dashboard/View Slider
            </li>

        </div>
    </div>
</div>    


<div class="row container">
    <div class="col-lg-12">
       <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
            <i class="fa fa-money fa-fw"></i>Insert  slider Image
            </h3>
        </div>
        <!-- end -->
          <div class="panel-body">
        
            <form action=" " method="post">
            <div class="form-group">
                <div class="col-md-6">
                    <label >Slider Name</label>
                </div>
                <div class="col-md-6">
                <input type="text" name="slider_name" class="form-control" required=' '>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-md-6">
                    <label >Slider Image</label>
                </div>
                <div class="col-md-6">
                  <input type="file" name="slide_img" class="form-control" >
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