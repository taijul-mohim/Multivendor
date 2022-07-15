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
                Dashboard/View  Customer
            </li>

        </div>
    </div>
</div>    

<div class="row container">
        <div class="col-lg-12">
            <div class="panel panel-defult">
                <div class="panel-heading">
                 
                    <h3 class="panel-title">

                    <i class="fa-solid fa-money-bill"></i>View Customer

                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-boarder table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Customer Id</th>
                                     <th>Customer Name</th>
                                     <th>Customer Email</th>
                                    <th>Customer Image</th>
                                    <th>Customer Area</th>
                                    <th>Customer Address</th>
                                    <th>Contact</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>

                           <?php 
                           $i=0;
                           $get_product="SELECT * FROM customer";
                           $query=mysqli_query($con,$get_product);
                           while($row=mysqli_fetch_array($query)){
                            $c_id=$row['customer_id'];
                           $c_name=$row['c_name'];
                           $c_email=$row['c_email'];
                           $c_area=$row['c_area'];
                           $c_adress=$row['c_address'];
                           $c_area=$row['c_contact'];
                           $c_img=$row['c_img'];
                           $c_contact=$row['c_contact'];
                           
                            
                           
                           
                           
                           

                            $i++;
                           ?>


                            <tr >
                            <td><?php echo $i?></td>
                            <td><?php echo $c_name?></td>
                             
                            <td><?php echo $c_email?></td>
                            <td><img src="../customer/c_images/<?php echo $c_img?>" height="50" width="50" alt=""></td>
                            <td><?php echo $c_area?></td>
                            <td><?php echo $c_adress?></td>
                            <td><?php echo $c_contact?></td>


                       
                          
                           
                            <td><a href="index.php?delete_c=<?php echo  $c_id; ?>" class="btn btn-danger" > Delete</a></td>
                      
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