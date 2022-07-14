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
                Dashboard/View Categories
            </li>

        </div>
    </div>
</div>    

<div class="row container">
        <div class="col-lg-12">
            <div class="panel panel-defult">
                <div class="panel-heading">
                 
                    <h3 class="panel-title">

                    <i class="fa-solid fa-money-bill"></i>View Category

                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-boarder table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>category Id</th>
                                     <th> Category Title</th>
                                     <th> Category Description</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                           <?php 
                           $i=0;
                           $get_product="SELECT * FROM categories";
                           $query=mysqli_query($con,$get_product);
                           while($row=mysqli_fetch_array($query)){
                            $pro_cat_id=$row['cat_id'];
                           $cat_title=$row['cat_title'];
                           $cat_desc=$row['cat_decs'];
                           
                            
                           
                           
                           
                           

                            $i++;
                           ?>


                            <tr >
                            <td><?php echo $i?></td>
                            <td><?php echo $cat_title?></td>
                             
                            <td><?php echo $cat_desc?></td>
                       
                          
                           
                            <td><a href="index.php?delete_cat=<?php echo  $pro_cat_id; ?>" class="btn btn-danger" > Delete</a></td>
                            <td><a href="index.php?edit_cat=<?php echo  $pro_cat_id; ?>" class="btn btn-info" > Edit</a></td>
                            <?php }?>
                            </tr>
                            
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






</center>

<?php }?>