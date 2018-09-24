
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Reflection Salon & span Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script> 
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src='menu_jquery.js'></script>
    <link rel='stylesheet' type='text/css' href='styles.css' />
    <link rel='stylesheet' type='text/css' href='table.css' />
	<link rel='stylesheet' type='text/css' href='bootstrap.css' />
</head>
<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
			 <div class="logo">
						<a href="index.html"><img src="images/47.png" alt="" /></a>
					</div>
			    <div class="call">
			    	<p><img src="images/45.png" alt="" />Call US: 111-234-56789</p>
			    </div>
			  			 
			<div class="clear"></div>
  		</div>
  	  </div>
	<div class="header_bottom">
		<div class="wrap">
	     	<div id='cssmenu'>
<ul>
<?php session_start();
include 'dbconnect.php';

if(!isset($_SESSION['Reg_id']))
	{
		header("location:login.php");
	}
	?>
   <li ><a href='customer_first.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Home</span></a></li>
	 <li class='has-sub'><a href='#'><span>Services</span></a>
      <ul> 
	  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_service_category`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <li><a href="customer_service_view.php?uid=<?php echo $row1['Cat_id'];?>"><?php echo $row1['Cat_name']; ?></a></li>
		  <?php
		  }
		  ?>
      </ul>
   </li>
          
		 
    <li class='has-sub'><a href='#'><span>Appointments</span></a>
      <ul>
		 <li ><a href='appointment_status.php'><span>Appointment Status</span></a></li>
		 <li ><a href='view_bill.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>View Bills</span></a></li>
      </ul>
   </li>
	
   <li class='has-sub'><a href='#'><span>Customers</span></a>
      <ul>
         <li ><a href='Customer_home.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Customer Details</span></a> </li>
         <li ><a href='customer_edit.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Edit Profile</span></a></li> 
      </ul>
   </li>
 
   <li class='has-sub'><a href='#'><span>Items</span></a>
      <ul>
         <li ><a href='customer_item_select.php'><span>View Item</span></a></li>
		 <li ><a href='cart_view.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Cart</span></a></li> 
 <li ><a href='order_view.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Orders</span></a></li> 		 
      </ul>
   </li>
    <li > <a href='feedback.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Feedback</span></a></li>
  <li class='has-sub'><a href='#'><span>Settings</span></a>
      <ul>
	  <li ><a href='customer_change_pass.php'><span>Change Password</span></a></li>
         <li ><a href='logout.php'><span>Logout</span></a></li>
		  <li ><a href='delete_account.php?uid=<?php echo $_SESSION['Reg_id'];?>' onclick="return confirm('Are you sure you want to delete your account??')"><span>Delete Account</span></a></li>  		  
      </ul>
   </li>
</ul>
</div>
</div>
</div>
 <div class="main">
    <div class="content" style="    padding: 106px 0;">
    
    	 <div class="wrap">
          
    	 	<div class="image group">
				
				<div class="grid span_2_of_3">
				</div>