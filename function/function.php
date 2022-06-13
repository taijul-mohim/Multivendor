<?php

$con=mysqli_connect("localhost","root","","ecom");
function getpro(){
    global $con;
    $get_product="SELECT * FROM product ORDER BY 1 LIMIT 0,6";
    $sqli=mysqli_query($con,$get_product);
    
    while($row=mysqli_fetch_array($sqli)){
      $pro_id= $row['product_id'];
      $product_title=$row['product_title'];
      $product_price=$row['product_price'];
      $product_img=$row['product_img1'];
    
      echo "
      <div class='col-md-4 col-sm-6 center-responsive single'>
      <div class='product'>

          <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$product_img'  height='580px' width='425px'  class='img-responsive' alt=''>
              <div class='text'>
                  <h3>$product_title</h3>
                  
                  <p class='price'>$product_price tk</p>
                  <center>
                  <p class='button'>
                      <a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
                      <a href='details.php' class='btn btn-primary'> <i class='fa fa-shoppinf-cart'></i> Add
                          to cart</a>
                  </p>
                  </center>
              </div>
          </a>
      </div>

  </div>
      ";

      
    }
}
// get p cat

function getpcat(){
    global $con;
$get_p_cat="SELECT * FROM product_categories ";
$sqli=mysqli_query($con,$get_p_cat);
while($row=mysqli_fetch_array($sqli)){
    $p_cat_id=$row['p_cat_id'];
    $p_cat_title=$row['p_cat_title'];
    $p_cat_desc=$row['p_cat_desc'];
   echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>"; 
} 
}
// categories
function getcat(){
  
  global $con; 
    $get_cat="SELECT * FROM categories ";
    $sqli=mysqli_query($con,$get_cat);
    while($row=mysqli_fetch_array($sqli)){
        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];
       echo "<li><a href='shop.php?id=$cat_id'>$cat_title</a></li>"; 
    } 
    
    
    
    

     
  
}

?>




