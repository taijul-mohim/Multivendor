<div class="panel panel-default sidebar-menu">
   <div class="panel-heading">
       <center>
           <img src="c_images/customer.png" height="150px" width="150px" alt="">

       </center>
       <br>
       <h3 align='center' class="panel-title">Name:Simanto</h3>
   </div>
   <div class="panel-body">
       <ul class="nav nav-pills nav-stacked">
       <li class="<?php if(isset($_GET['my_order'])){echo "active";}?>">
           <a href="my_account.php?my_order"> <i class="fa fa-list"></i>  My order</a>
       </li>
       <li class="<?php if(isset($_GET['my_address'])){echo "active";};?>">
           <a href="my_account.php?my_address"> <i class="fa fa-user"></i>My Address</a>
       </li>
       <li class="<?php if(isset($_GET['pay_offline'])){echo "active";};?>">
           <a href="my_account.php?pay_offline"> <i class="fa fa-bolt"></i>Pay Offline</a>
       </li>
       <li class="<?php if(isset($_GET['edit_account'])){echo "active";};?>">
           <a href="my_account.php?edit_account"> <i class="fa fa-pencil"></i>Edit Account</a>
       </li>
       <li class="<?php if(isset($_GET['change_pass'])){echo "active";};?>">
           <a href="my_account.php?change_pass"> <i class="fa fa-user"></i>Change Password</a>
       </li>
       <li class="<?php if(isset($_GET['delete_account'])){echo "active";};?>">
           <a href="my_account.php?delete_account"> <i class="fa fa-trace-o"></i>Delete Account</a>
       </li>
       <li class="<?php if(isset($_GET[''])){echo "active";};?>">
           <a href="my_account.php?pay_offline"> <i class="fa fa-sign-out"></i>Loge Out</a>
       </li>
       </ul>
   </div>
</div>