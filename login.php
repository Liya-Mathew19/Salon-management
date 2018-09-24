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
</head>
<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
			 <div class="logo">
						<a href="index.php"><img src="images/47.png" alt="" /></a>
					</div>
			    <div class="call">
			    	<p><img src="images/45.png" alt="" />Call US: 111-234-56789</p>
			    </div>
			  			 
			<div class="clear"></div>
  		</div>
  	  </div>
	<div class="header_bottom">
		<div class="wrap">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="login.php">Login</a></li>
			    	<li><a href="Customer_Add.php">Register</a></li>
					<li><a href="services.php">Services</a></li>			    	
			    	<li><a href="about.php">About Us</a></li>
			    
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="clear"></div>
	      </div>	     
	  </div>	
	   <div class="strip"> </div>
    </div> 	     
	  </div>	
    </div>  

 <div class="main">
    <div class="content">
    	 <div class="wrap">
    	     <div class="contact-form">	
					<h2>Login Form</h2><br>
					    <form method="post" action="#">
						    <div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="username" type="text" style="width: 44%;"></span>
						    </div>
						    <div>
						     	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" style="width: 44%;"></span>
						    </div>
                            <br>
                            <br>
                                <span><input type="submit" name="submit" value="submit" style="float:left;"></span><br><br><br>
								  
					    </form>  
					  
						
<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
 	$uname=$_POST['username'];
 	$pwd=$_POST['password'];
	$p=md5($pwd);
	$a=mysqli_query($con,"select * from `tbl_login` where `Username`='$uname' and `Password`='$p' or `Password`='$pwd'");
	$row=mysqli_fetch_array($a);
	if(!empty($row))
	{
		if($row['Role_id']==1)
		{
			session_start();
			$_SESSION['username']=$row['Username'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['Reg_id']=$row['Reg_id'];
			header("Location:customer_first.php?uid=$row[Reg_id]");
		}
		else if($row['Role_id']==2)
		{
			session_start();
			$_SESSION['username']=$row['Username'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['Reg_id']=$row['Reg_id'];
			header("Location:staff_first.php");
			
		}	
		
		else 
		{	
			session_start();
			$_SESSION['username']=$row['Username'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['Reg_id']=$row['Reg_id'];
			header("Location:admin_home.php");
		}
	}
	else
		echo "<script>alert('Username/Password Incorrect')</script>"; 
	}	
?>
				  <div class="clear"></div>
				  </div>
                  <div class="rsidebar span_1_of_3" style="margin-left:700px; margin-top:-250px; ">
				      <h2>Latest News? </h2>
					 <div class="popular-post">
					<div class="post-grid">
						<img src="images/46.jpg" title="post1" alt="">
						<p>How to adapt your make-up if you wear glasses - tips and tricks to enhance your best features</p>
							<div class="clear"> </div>
					  </div>
					    <div class="post-grid">
							<img src="images/7.jpg" title="post1" alt="">
							  <p>Boots discount code deals: Get cheap Pampers nappies, a third off Olay Eye cream and half price vitamins</p>
                              <div class="clear"> </div>
						</div>
						<div class="post-grid">
							<img src="images/8.jpg" title="post1" alt="">
							  <p>This is how much you will spend on clothes in your lifetime - and it is a whole lot more than you'd think</p>
								<div class="clear"> </div>
						</div>
								<div class="clear"> </div>
						</div>
					
				</div>
		 </div>
	   <div class="clear"></div>
       
     </div>
    </div>
  </div>
  <div class="footer-strip"> </div>
 <div class="footer">
   	  <div class="wrap">
   	    <div class="footer_grides">
   	    	<div class="footer_grid1">
					<h3>Information</h3>
								<ul>
						            <li><a href="#">About Us</a></li>
						     		<li><a href="#">Privacy Policy</a></li>
						     		<li><a href="#">Newsletter</a></li>
						     		<li><a href="#">Site Map</a></li>						     		
						   	   </ul>	
						
					  	</div>
				<div class="footer_grid2">
					<h3>Get In Touch</h3>
							<div class="address">
							<ul>
						  	  <li>Reflection Salon & Spa,</li>
						  	  <li>New City,</li>
						  	   <li>USA.</li>
						  	 <li>www.reflection@gmail.com</li>
						  	 <li><span>Telephone :</span> +06821458963</li>
						  	 <li><span>Fax :</span> +01478523690</li>
						  </ul>
				   </div>				  
			     </div>
				<div class="footer_grid3">
					<h3>Our Company</h3>
						<div class="f_menu">
							   <ul>
						            <li><a href="#">About your Company</a></li>
						     		<li><a href="#">Terms &amp; conditions</a></li>
						     		<li><a href="#">News</a></li>
						     		<li><a href="#">Team of professionals</a></li>	
						     		<li><a href="#">Testimonials</a></li>					     		
						   	   </ul>
						</div>
				   </div>				
		  <div class="footer_grid4">
			<h3>Follow US</h3>
				<div class="img_list">
				    <ul>
					     <li><img src="images/28.png" alt=""><a href="#">Join Us on Facebook</a></li>
					     <li><img src="images/twitter.png" alt=""><a href="#">Follow Us on Twitter</a></li>
					     <li><img src="images/39.png" alt=""><a href="#">Share Us on Twitter</a></li>
				    </ul>
				</div>
		 </div>
	   <div class="clear"></div>
     </div>
    </div>
  </div>
<div class="copy_right">
				<p>Company Name © All rights Reseverd | Design by  <a href="http://w3layouts.com"> LIYA MATHEW</a></p>
		 </div>
</body>
</html>
