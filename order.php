<?php 
session_start();
include("include/db.php");
include("function/function.php");
?>
<?php
if(isset($_GET['c_id'])){
 $customer_id= $_GET['c_id'];
}
$ip_add=getUserIP();
$status="pending";
$invoice_no=mt_rand();
$select_cart="SELECT * FROM cart WHERE ip_add='$ip_add' ";
$run_cart=mysqli_query($con,$select_cart);
while($row=mysqli_fetch_array($run_cart)){
    $pro_id=$row['p_id'];
    $size=$row['size'];
    $qty=$row['qty'];
    $get_product="SELECT * FROM product WHERE product_id='$pro_id'";
    $run_pro=mysqli_query($con,$get_product);
    while($row_pro=mysqli_fetch_array($run_pro)){
        $sub_total=$row_pro['product_price'] * $qty;
        $insert_customer_order="INSERT INTO customer_order(customer_id,due_amount,invoice_no,qty,size,order_date,order_status)VALUES('$customer_id','$sub_total','$invoice_no','$qty','$size',NOW(),'$status') ";
        $run_cust_order=mysqli_query($con,$insert_customer_order);
        //  $insert_pendin_order="INSERT INTO pendin_order(customer_id,invoice_no,product_id,qty,size,order_status)VALUES('$customer_id','$invoice_no','$pro_id','$qty','$size','$status') ";
         $insert_pendin_order="INSERT INTO pending_order(customer_id,invoice_no,product_id,qty,size,order_status) VALUES('$customer_id','$invoice_no','$pro_id','$qty','$size','$status')";
        $run_pending_order=mysqli_query($con,$insert_pendin_order);
        $delet_cart="DELETE FROM cart WHERE ip_add='$ip_add'";
        $run_del=mysqli_query($con,$delet_cart);
        echo "<script>alert('your order has been submitted,Thanks')</script>";
        echo "<script>window.open('customer/my_account.php?my_order','_self')</script>";
    }
}




?>
