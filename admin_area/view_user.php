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
                Dashboard/View user
            </li>

        </div>
    </div>
</div>    

<div class="row container">
        <div class="col-lg-12">
            <div class="panel panel-defult">
                <div class="panel-heading">
                 
                    <h3 class="panel-title">

                    <i class="fa-solid fa-money-bill"></i>View Admin

                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-boarder table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Admin Id</th>
                                    <th>Admin Image</th>
                                     <th>Admin Name</th>
                                     <th>Admin Email</th>
                                    
                                     <th>Admin Contact</th>
                                    
                                    <th>Admin Job </th>
                                    <th>Admin About</th>
                                    
                                    <th>Delete Payment</th>
                                    <th>Admin Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                           <?php 
                           $i=0;
                           $get_admin="SELECT * FROM admin ";
                           $query=mysqli_query($con,$get_admin);
                           while($row=mysqli_fetch_array($query)){
                           $admin_id=$row['admin_id'];
                           
                           $admin_name=$row['admin_name'];
                           $admin_email=$row['admin_email'];
                           $admin_img=$row['admin_img'];
                           $admin_contact=$row['admin_contact'];
                            $admin_job=$row['admin_job'];
                            $admnin_about=$row['admin_about'];


                            
                         
                           
                           

                            $i++;
                           ?>


                            <tr >
                            <td><?php echo $i?></td>
                            <td><img src="admin_images/<?php echo $admin_img?>" height="50" width="50" alt=""></td>
                            <td><?php echo $admin_name?></td>
                       
                            <td><?php echo $admin_email?></td>
                            <td><?php echo $admin_contact?></td>
                            <td><?php echo $admin_job?></td>
                            <td><?php echo $admnin_about?></td>
                   
                          

                       
                          
                           
                            <td><a href="index.php?d_admin=<?php echo  $admin_id; ?>" class="btn btn-danger" > Delete</a></td>
                            <td><a href="index.php?edit_profile=<?php echo  $admin_id; ?>" class="btn btn-info" > Edit</a></td>
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