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
                                    <th>Payment NO</th>
                                     <th>Invoice NO</th>
                                     <th>Amount Paid</th>
                                     <th>Payment Method</th>
                                     <th>Reference No</th>
                                    
                                    <th>Payment Date</th>
                                    <th>Delete Payment</th>
                                </tr>
                            </thead>
                            <tbody>

                           <?php 
                           $i=0;
                           $get_Payment="SELECT * FROM payment ";
                           $query=mysqli_query($con,$get_Payment);
                           while($row=mysqli_fetch_array($query)){
                           $payment_id=$row['payment_id'];
                           
                           $invoice_no=$row['invoice_id'];
                           $amount=$row['amount'];
                           $method=$row['payment_mode'];
                           $ref=$row['ref_no'];
                            $date=$row['date'];


                            
                         
                           
                           

                            $i++;
                           ?>


                            <tr >
                            <td><?php echo $i?></td>
                            <td><?php echo $invoice_no?></td>
                            <td><?php echo $amount?></td>
                       
                            <td><?php echo $method?></td>
                            <td><?php echo $ref?></td>
                            <td><?php echo $date?></td>
                   
                          

                       
                          
                           
                            <td><a href="index.php?payment=<?php echo  $payment_id; ?>" class="btn btn-danger" > Delete</a></td>
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