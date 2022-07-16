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
                Dashboard/View Order
            </li>

        </div>
    </div>
</div>    

<div class="row container">
        <div class="col-lg-12">
            <div class="panel panel-defult">
                <div class="panel-heading">
                 
                    <h3 class="panel-title">

                    <i class="fa-solid fa-money-bill"></i>View Order

                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-boarder table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                     <th>Customer Email</th>
                                     <th>Invoice No:</th>
                                     <th>Product Title</th>
                                     <th>Product Qty</th>
                                     <th>Product Size</th>
                                    <th>Order Date</th>
                                    <th>Total Amount</th>
                                    <th>Order Status</th>
                                    <th>Delete Order</th>
                                </tr>
                            </thead>
                            <tbody>

                           <?php 
                           $i=0;
                           $get_order="SELECT * FROM customer_order ";
                           $query=mysqli_query($con,$get_order);
                           while($row=mysqli_fetch_array($query)){
                           $order_id=$row['order_id'];
                           $customer_id=$row['customer_id'];
                           $invoice_no=$row['invoice_no'];
                           $product_id=$row['product_id'];
                           $qty=$row['qty'];
                           $amount=$row['due_amount'];
                           $size=$row['size'];
                           $date=$row['order_date'];
                           $status=$row['order_status'];


                            
                           $select_email="SELECT * FROM customer WHERE customer_id=$customer_id";
                           $sqli=mysqli_query($con,$select_email);
                           $Email_row=mysqli_fetch_array($sqli);
                           $c_email=$Email_row['c_email'];
                        //    product title
                           $select_product="SELECT * FROM product WHERE product_id=$product_id";
                           $sqli=mysqli_query($con,$select_product);
                           $product_row=mysqli_fetch_array($sqli);
                           $p_title=$product_row['product_title'];
                           
                           
                           

                            $i++;
                           ?>


                            <tr >
                            <td><?php echo $i?></td>
                            <td><?php echo $c_email?></td>
                            <td><?php echo $invoice_no?></td>
                       
                            <td><?php echo $p_title?></td>
                            <td><?php echo $qty?></td>
                            <td><?php echo $size?></td>
                            <td><?php echo $date?></td>
                            <td><?php echo $amount?></td>
                            <td><?php echo $status?></td>

                       
                          
                           
                            <td><a href="index.php?delete_order=<?php echo  $order_id; ?>" class="btn btn-danger" > Delete</a></td>
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