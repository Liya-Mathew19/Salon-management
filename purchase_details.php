<?php
include "customer_header.php";
?>
<html>
<head>
<h1><font color="green">DELIVERY DETAILS</font></h1>
</head>
<form name="Credit_payment_Add.php" action="details_action.php" method="post">
<body>
      <table>
          <tr>
           <td>Customer</td>
           <td><input type="text" name="cust_name" id="cust_name"/></td></tr>
          <tr>
          <td><b>House Name</b></td>
          <td><input type="text" name="add1" id="add1" value=""></td>
          </tr>
          <tr>
          <td><b>City</b></td>
          <td><input type="text" name="add2" id="add2" value=""></td>
          </tr>
		   <td><b>District</b></td>
          <td><select name="district">
		  <option>--Select--</option>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_district`");
		  $r=mysqli_num_rows($res);
		  while($row=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row['Dis_id'];?>>	  <?php echo $row['Dis_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></td>
          </tr>
          <tr>
          <td><b>Pin</b></td>
          <td><input type="text" name="pin" id="pin" value=""></td>
          </tr>
		   <tr>
          <td><b>Phone</b></td>
          <td><input type="text" name="phone" id="phone" value=""></td>
          </tr>
          <tr>
          <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Proceed"></td>
          </tr>
</table>
<br><a href="cart_view.php?>"><img src="images/fleche.png" width="24px" style="    padding-left: 363px;">Back</a>
</body>
<img src="images/home.ico" width="100px" style=" padding-left: 601px; padding-bottom: 184px;
    margin-top: -393px; width:350px">
</html>
<?php 
include "footer.php";
?>