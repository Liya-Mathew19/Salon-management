<?php 
include 'staff_header.php';
include 'dbconnect.php';
?>
       <marquee><b><font size="5">Welcome to you <?php echo $_SESSION['username'];?></b></font></marquee>
	     	<div class="clear"></div>
	      </div>	     
	  </div>	
	  </div>
	   
       <div class="slider">
       	 <div class="wrap">
       	   <div class="slider_top">         
         		<div class="slider_left">
				  <div class="wmuSlider example2">
					<div class="wmuSliderWrapper">
					<article> <img src="images/20.jpg" alt="" /> </article>
					</div>	
					<script src="js/jquery.wmuSlider.js"></script> 
								
				 </div>
				</div>				
				   <div class="slider_right">
				      <img src="images/10.jpg" alt="" style="    height: 370px;"/>
				         <div class="sliderright-text">
				  
				       </div>
				   </div>
 <?php
 include 'footer.php';
 ?>