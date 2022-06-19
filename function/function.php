<?php

$con=mysqli_connect("localhost","root","","ecom");
// ip adress
function getUserIP(){
    switch(true){
        case (!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_FORWARDED_FOR'])): return $_SERVER[' HTTP_X_FORWARDED_FOR']; 
        default : return $_SERVER['REMOTE_ADDR'];

    }
}
// add card
function addCart(){
    global $con;
if(isset($_GET['add_cart'])){
   $ip_add=getUserIP();
   $p_id=$_GET['add_cart'];
   $product_qty=$_POST['product_qty'];
   $product_size=$_POST['product_size'];
   $check_product="SELECT * FROM cart WHERE ip_add='$ip_add'AND p_id='$p_id'";
   $run_check=mysqli_query($con,$check_product);
   if(mysqli_num_rows($run_check)>0){
       echo "<script>alert('This Product already Added In Cart')</script>";
       echo "<script>window.open('details.php?pro_id=$p_id,'_self')</script>";
   }else{
       $query="INSERT INTO cart(p_id,ip_add,qty,size)VALUES('$p_id','$ip_add','$product_qty','$product_size')";
       $run_query=mysqli_query($con,$query);
       echo "<script>window.open('details.php?pro_id=$p_id,'_self')</script>";
   }
}


}


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
                      <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> <i class='fa fa-shoppinf-cart'></i> Add
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
$get_p_cat="SELECT * FROM product_categories";
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
       echo "<li><a href='shop.php?cat_id=$cat_id'>$cat_title</a></li>"; 
    } 
    
    
    
    

     
  
}
// get product categories product
function getpcatpro(){
    global $con;
    if(isset($_GET['p_cat'])){
      $p_cat_id=$_GET['p_cat'];
      $get_p_cat="SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";
      $sqli=mysqli_query($con,$get_p_cat);
      $row_p_cat=mysqli_fetch_array($sqli);
      $p_cat_title=$row_p_cat['p_cat_title'];
      $p_cat_desc=$row_p_cat['p_cat_desc'];

      $get_product="SELECT * FROM product WHERE p_cat_id='$p_cat_id'";
      $run_products=mysqli_query($con,$get_product);
      $count=mysqli_num_rows($run_products);
      if($count==0){
             echo "<div class='box'>
             
             <h1>No product Fount In This Product Category</h1>
             
             
             </div>";
      }else{
          echo" <div class='box'>
          <h1> $p_cat_title</h1>
          <p>$p_cat_desc</p>
          </div>
          
          ";
      }
      while($row=mysqli_fetch_array($run_products)){
          $pro_id=$row['product_id'];
          $pro_title=$row['product_title'];
          $product_price=$row['product_price'];
          $pro_img1=$row['product_img1'];
          echo "
          <div class='col-md-4 col-sm-6 center-responsive'>
          <div class='product'>
    
              <a href='details.php?pro_id=$pro_id'>
                  <img src='admin_area/product_images/$pro_img1'  height='580px' width='425px'  class='img-responsive' alt=''>
                  <div class='text-center'>
                      <h3>$pro_title</h3>
                      
                      <p class='price'>$product_price tk</p>
                      <center>
                      <p class='button'>
                          <a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
                          <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> <i class='fa fa-shoppinf-cart'></i> Add
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
}


// get product categories 

function getCatpro(){
    global $con;
    if(isset($_GET['cat_id'])){
        $cat_id=$_GET['cat_id'];
        $get_cat="SELECT * FROM categories WHERE cat_id='$cat_id'";
        $sqli=mysqli_query($con,$get_cat);

       $row_cat=mysqli_fetch_array($sqli);
       $cat_id=$row_cat['cat_id'];
       $cat_title=$row_cat['cat_title'];
       $cat_desc=$row_cat['cat_decs'];
       $cat_query="SELECT * FROM product WHERE cat_id='$cat_id'";
       $sqli=mysqli_query($con,$cat_query);
       $count=mysqli_num_rows($sqli);
       if($count==0){
        echo "<div class='box'>
        
        <h1>No Category Found</h1>
        
        
        </div>";
       }else{

        echo" <div class='box'>
        <h1> $cat_title</h1>
        <p>$cat_desc</p>
        </div>
        
        ";

        while($row=mysqli_fetch_array($sqli)){
            $pro_id=$row['product_id'];
            $pro_title=$row['product_title'];
            $product_price=$row['product_price'];
            $pro_img1=$row['product_img1'];
            echo "
            <div class='col-md-4 col-sm-6 center-responsive'>
            <div class='product'>
      
                <a href='details.php?pro_id=$pro_id'>
                    <img src='admin_area/product_images/$pro_img1'  height='580px' width='425px'  class='img-responsive' alt=''>
                    <div class='text-center'>
                        <h3>$pro_title</h3>
                        
                        <p class='price'>$product_price tk</p>
                        <center>
                        <p class='button'>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> <i class='fa fa-shoppinf-cart'></i> Add
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



    }
}


?>



