<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo"<script>window.open('login.php','_self')</script>";
}else{

    if(isset($_GET['edit_profile'])){
        $edit_id=$_GET['edit_profile'];
       $query="SELECT * FROM admin WHERE admin_id='$edit_id'";
       $sqli=mysqli_query($con,$query);
       $row=mysqli_fetch_array($sqli);
       $admin_id=$row['admin_id'];
       $admin_name=$row['admin_name']; 
       $admin_email=$row['admin_email'];
       $admin_pass=$row['admin_pass'];
       $admin_job=$row['admin_job'];
       $admin_contact=$row['admin_contact'];
       $admin_about=$row['admin_about'];
       $admin_img=$row['admin_img'];
    }
    

    

?>
<center>
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    Dashboard/Insert Admin
                </li>

            </div>
        </div>
    </div>


    <div class="row container">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i>Insert Admin
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
                    <form action=" " method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>user Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="admin_name" class="form-control" required='' value="<?php echo $admin_name?>">
                            </div>
                            <br>
                            <br>
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="admin_email" class="form-control" required='' value="<?php echo $admin_email?>">
                            </div>
                            <br>
                            <br>
                            <div class="col-md-6">
                                <label>user Password</label>
                            </div>
                            <div class="col-md-6">
                                <input type="pass" name="admin_pass" class="form-control" required='' value="<?php echo  $admin_pass?>" >
                            </div>
                            <br>
                            <br>
                            <div class="col-md-6">
                                <label>user Job</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="admin_job" class="form-control" required=''  value="<?php echo  $admin_job?>">
                            </div>
                            <br>
                            <br>
                            <div class="col-md-6">
                                <label>user Contact</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="admin_contact" class="form-control" required='' value="<?php echo $admin_contact?>">
                            </div>
                            
                            <br>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label>User About</label>
                            </div>
                            <div class="col-md-6">
                                <textarea name="about" class="form-control" id="" cols="30" rows="10"
                                    required=''><?php echo $admin_about ?></textarea>
                            </div>

                        </div>
                       <br>
                       <br>
                       <br>
                       <br>

                        <div class="col-md-6">
                                <label>user Image</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="admin_img" class="form-control" required=''>
                                <img src="admin_images/<?php echo $admin_img?>"  height="80" width="60"  alt="">
                            </div>

         
          
                        <div class="form-group">
                            <div class="col-md-6">

                            </div>
                            
                            <div class="col-md-6 mt-2">
                                <button name="submit" class=" form-control btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>




                    </form>


                    <?php 
    
    if(isset($_POST['submit'])){
       $admin_name=$_POST['admin_name'];
       $admin_email=$_POST['admin_email'];
       $admin_pass=$_POST['admin_pass'];
       $admin_contact=$_POST['admin_contact'];
       $admin_about=$_POST['about'];
       $admin_job=$_POST['admin_job'];
       $admin_img=$_FILES['admin_img']['name'];
       $tmp=$_FILES['admin_img']['tmp_name'];
       move_uploaded_file($tmp,"admin_images/$admin_img");

       if(empty($admin_img)){
        $sql="SELECT * FROM admin WHERE admin_id='$edit_id'";
        $select_img=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($select_img)){
             $admin_img=$row['admin_img'];
    
         }
        }
    

     $sqli="UPDATE admin SET admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_img='$admin_img',admin_contact='$admin_contact',admin_about='$admin_about',admin_job='$admin_job'  WHERE admin_id='$edit_id' ";
     $query=mysqli_query($con,$sqli);
     if($sqli){
        echo "<script>alert('Update User successfully')</script>"  ;
        echo "<script>window.open('index.php?view_user','_self')</script>";
      }
    }
    
    
    
    
    ?>





                </div>
            </div>
        </div>
    </div>






</center>






















<?php }?>