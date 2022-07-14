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
                Dashboard/Insert Slider
            </li>

        </div>
    </div>
</div>    

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >
                    <i class="fa fa-money fa-fw"></i>Insert Slide
                </h3>
            </div>
            <form action=""class='form-horixontal' method="post" enctype="multipart/form-data"   >
               <div class="form-group">
                <label class="col-md-3 control-lable">Slide Name </label>
                <div class="col-md-6">
                    <input type="text"  name="slider_name" class="form-control">

                </div>
               </div>
               <div class="form-group">
                <label class="col-md-3 control-lable" >Slide Img
                   
                </label>
                <div class="col-md-6">
                    <input type="text">
                </div>
               </div>



            </form>

        </div>
    </div>
</div>



</center>






<?php }?> 