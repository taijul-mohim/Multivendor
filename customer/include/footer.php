 <div  id="footer">
     <div class="container">
         <div class="row">

             <div class="col-md-3 col-sm-6">
              <h4>Pages</h4>
              <ul>
                  <li><a href="../cart.php">Shopping cart</a></li>
                  <li><a href="../contact.php">Contact</a></li>
                  <li><a href="../shop.php">Shop</a></li>
                  <li><a href="../my_account.php">MY Account</a></li>
              </ul>
              <hr>
              <h4>Users</h4>
              <ul>
                  <li><a href="my_account.php">Login</a></li>
                  <li><a href="../customer_registration.php">Register</a></li>
              </ul>
              <hr class="hidden-md hidden-lg hidden-sm">
             </div>
             <div class="col-md-3 col-sm-6">
                 <h4>Top Product Categories</h4>
                 <ul>
                 <?php 
                 $get_cat="SELECT * FROM categories ";
                 $sqli=mysqli_query($con,$get_cat);
                 while($row=mysqli_fetch_array($sqli)){
                     $cat_id=$row['cat_id'];
                     $cat_title=$row['cat_title'];
                    echo "<li><a href='shop.php?id=$cat_id'>$cat_title</a></li>"; 
                 } 
                 
                 
                 
                 
                 ?>
                  
                 </ul>
                 <hr>
             </div>
             <div class="col-md-3 col-sm-6">
              <h4>Where to find us</h4>
              <p>
                  <strong>
                      friend.com</strong>
                      <br>Sohawal
                      <br>ksdkkskskks
                      <br>+01674555554
                  <a href="contact.php">Goto contact us page</a>
              </p>
             </div>
              <hr class="hidden-md hidden-lg">

              <div class="col-md-3 col-sm-6">
         <h4>Get the news</h4>
         <p class="text-muted">
            new
         </p>
         <form action="">
             <div class="input-group-btn">
                 <input type="text" name="email" class="form-control">
                 <span class="input-group-btn">
                     <input type="text" class="btn btn-default" value="Subscribe" >

                 </span>
             </div>
         </form>
         <h4>Stay IN touch</h4>
         <p class="social">
             <a href="#"><i class="fa fa-facebook"></i></a>
             <a href="#"><i class="fa fa-twiter"></i></a>
             <a href="#"><i class="fa fa-instagram"></i></a>
             <a href="#"><i class="fa fa-google-plus"></i></a>
             <a href="#"><i class="fa fa-envelope"></i></a>
         </p>
              </div>
         </div>
     </div>
 </div>


 <!-- copyright section -->
 <div  id="copyright">
  <div class="container">
      <div class="col-md-6">
          <p class="pull-left">
            &copy; 2021 taijul
          </p>
      </div>
      <div class="col-md-6">
          <p class="pull-right">
           tamplate
          </p>
      </div>
  </div>




 </div>