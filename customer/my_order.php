
<div class="box">
<center>
    <h1>
        My order
    </h1>
    <p>
        If you have any Question, Please feel free to <a href="../contactus.php">
        contact us, Our customer service center is working for you 24/7.</a>
    </p>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>Sr.No</th>
                 <th>Due Amount</th>
                 <th>Invoice Number</th>
                 <th>Quantity</th>
                 <th>Size</th>
                 <th>Order Date</th>
                 <th>Paid/unpaid</th>
                 <th>Status</th>
             </tr>
         </thead>
         <tbody>
      <?php
      $customer_session=$_SESSION['customer_email'];
      $get_customer="SELECT * FROM customer WHERE c_email='$customer_session'";
      $query=mysqli_query($con,$get_customer);
      $row_c=mysqli_fetch_array($query);
      $customer_id=$row_c['customer_id'];
      $get_order="SELECT * FROM customer_order WHERE customer_id='$customer_id'";
      $order_query=mysqli_query($con,$get_order);
      $count=0;
      while($row=mysqli_fetch_array($order_query)){
       $order_id=$row['order_id'];
       $due_amount=$row['due_amount'];
       $invoice=$row['invoice_no'];
       $qty=$row['qty'];
       $size=$row['size'];
       $date=substr($row['order_date'],0,11);
       $order_status=$row['order_status'];
      $count++;
      if($order_status=='pending'){
        $order_status="Unpaid";
      }else{
        $order_status='Paid';
      }
      
      
      ?>      
             <tr>
                 <td><?php echo $count?></td>
                 <td><?php echo $due_amount?>TK</td>
                 <td><?php echo $invoice?></td>
                 <td><?php echo $qty?></td>
                 <td><?php echo $size ?></td>
                 <td><?php echo $date ?></td>
                 <td><?php echo $order_status?></td>
                 <td><a href="confirm.php?order_id=<?php echo $order_id?>" target="_blank" class="btn btn-primary">Confirm If you Paid</a></td>

             </tr>
     <?php  }?>
        
         </tbody>
        </table>
    </div>
</center>
</div>