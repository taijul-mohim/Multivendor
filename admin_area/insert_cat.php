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
                Dashboard/Insert Categories
            </li>

        </div>
    </div>
</div>    


<div class="row container">
    <div class="col-lg-12">
       <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
            <i class="fa fa-money fa-fw"></i>Insert  Categories
            </h3>
        </div>
        <!-- end -->
          <div class="panel-body">
            <!-- <form   action="" method="post">
                <div class="form-group">
                    <label  class="col-md-3 control-label"> Product Category Title</label>
                  
                <div class="col-md-6">
                    <input type="text" name="p_cat_title" class="form-control">
                </div> -->
                
                <!-- form- -->
                <!-- <div class="form-group">
                    <label class="col-md-3 control-label">Product Category Description</label>
                    <div class="col-md-6">
                        <textarea name="p_cat_desc" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" ></label>
                    <div class="col-md-6">
                        <input type="text" name="submit" value="Submit Now" class="btn btn-primary form-control" > 
                    </div>
                </div>
            </form> -->
            <form action=" " method="post">
            <div class="form-group">
                <div class="col-md-6">
                    <label >Category Title</label>
                </div>
                <div class="col-md-6">
                <input type="text" name="cat_title" class="form-control" required=''>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-md-6">
                    <label >Category Description</label>
                </div>
                <div class="col-md-6">
                <textarea name="cat_desc" class="form-control" id="" cols="30" rows="10" required='' ></textarea>
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
        $c_title=$_POST['cat_title'] ;
         $c_desc=$_POST['cat_desc'];
        $query="INSERT INTO categories(cat_title,cat_decs)VALUES('$c_title','$c_desc')";
        $sqli=mysqli_query($con,$query);
        if($sqli){
            echo "<script>alert(' Category Add  successfully')</script>"  ;
            echo "<script>window.open('index.php?view_cat','_self')</script>";
          }
    }
    
    
    
    
    ?>





          </div>
       </div>
    </div>
</div>    






</center>






















<?php }?>