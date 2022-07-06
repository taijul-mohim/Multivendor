<?php

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
                Dashboard/View Product
            </li>

        </div>
    </div>
</div>    
</center>

<center>
    <div class="row container">
        <div class="col-lg-12">
            <div class="panel panel-defult">
                <div class="panel-heading">
                 
                    <h3 class="panel-title">

                    <i class="fa-solid fa-money-bill"></i>View Product

                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-boarder table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Title</th>
                                    <th>Product Image</th>
                                    <th>Produc Price</th>
                                  
                                    
                                    <th>Product keyword</th>
                                    <th>Product Date</th>
                                    <th>Product Delete</th>
                                    <th>Product Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                           <?php 
                           $i=0;
                           $get_product="SELECT * FROM product";
                           $query=mysqli_query($con,$get_product);
                           while($row=mysqli_fetch_array($query)){
                            $pro_id=$row['product_id'];
                           $product_title=$row['product_title'];
                           $p_img1=$row['product_img1'];
                           $p_img2=$row['product_img2'];
                           $p_img3=$row['product_img3'];
                           $product_price=$row['product_price'];
                           $product_key=$row['product_key'];
                           $date=$row['date']; 
                            
                           
                           
                           
                           

                            $i++;
                           ?>


                            <tr >
                            <td><?php echo $i?></td>
                            <td><?php echo $product_title?></td>
                             <td>1.  <img src="product_images/<?php echo $p_img1?>" height="30" width="30" alt=""><br>
                             <br>
                             2. <img src="product_images/<?php echo $p_img2?>" height="30" width="30" alt=""><br>
                             <br>
                             3. <img src="product_images/<?php echo $p_img3?>" height="30" width="30" alt=""><br>
                            </td>
                            <td><?php echo $product_price?></td>
                       
                            <td><?php echo $product_key ?></td>
                            <td><?php echo $date?></td>
                            <td><a href="index.php?delete_id=<?php echo  $pro_id; ?>" class="btn btn-danger" > Delete</a></td>
                            <td><a href="index.php?edit_id=<?php echo  $pro_id; ?>" class="btn btn-info" > Edit</a></td>
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