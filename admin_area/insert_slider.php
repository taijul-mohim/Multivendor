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
                <input type="text" name="slider_name" class="form-control" required=' ' placeholder="Slider name"> 
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-md-6">
                    <label >Slider Image</label>
                </div>
                <div class="col-md-6">
                <input type="file" name="slide_img" class="form-control" required=''>
                    </div>
                  
            </div>
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
        $slide_name=$_POST['slider_name'];
        $slide_img=$_FILES['slide_img']['name'];
        $tmp_name=$_FILES['slide_img']['tmp_name'];
        $view=" SELECT * FROM slider";
        $view_run=mysqli_query($con,$view);
        $count=mysqli_num_rows($view_run);
        if($count<4){

            move_uploaded_file($tmp_name,"slider_images/$slide_img");
            $insert_slider="INSERT INTO  slider(slider_name,Slider_img)VALUES('$slide_name','$slide_img'); ";
            $run=mysqli_query($con,$insert_slider);
            echo "<script>alert('Insert Slider   successfully')</script>"  ;
            echo "<script>window.open('index.php?view_slider','_self')</script>";
        
        
        }   else{
            echo "<script>alert('You Have already  4 slider')</script>"  ;

        }
    }
    
    
    
    
    ?>





          </div>
       </div>
    </div>
</div>    






</center>



<?php }?>