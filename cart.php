<?php
include 'customer_header.php';
include 'dbconnect.php';
$x=$_SESSION['Reg_id'];
$sql=mysqli_query($con,"select * from `tbl_registration` where `Reg_id`='$x'");
$row=mysqli_fetch_array($sql);
$var_Id=$_GET['uid'];
$sql1="select * from tbl_items where Item_id='$var_Id'";
$result=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result);
$id=$row1['Item_id'];
$_SESSION['Item_id']=$id;
$item=$row1['Item_name'];
$rate=$row1['Item_price'];
      
  ?>
<script type="text/javascript">
function validate()
{
 
var  dvar5 = document.getElementById("txt_qty");
if(dvar5.value=="")
{
 alert("Enter Quantity...");
dvar5.focus();
return false;
}
else
	{
	  
	   var expn=/^[0-9]+$/;
                if(dvar5.value.match(expn))
	     {
		    if(dvar5.value.length>5)
		
		 {alert("Enter a valid number"); 
				 	  dvar5.focus();
                 return false;
		}
            }
         else
        {
                 alert("Enter a valid number"); 
				 	  dvar5.focus();
                 return false;
				 
         }
		
	  }
}
</script>
<script type="text/javascript" src="calender/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="calender/js/jquery-ui-1.8.14.custom.min.js"></script>
		<link type="text/css" href="calender/css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />	
		<script type="text/javascript">
			<!--//function calc(){ -->
			
			$(document).ready(function(){
			$("#txt_qty").blur(function(){ 
			
			var qty=parseInt($("#txt_qty").val());
			var rate=parseInt($("#txt_Amount").val());
			//alert(a);
			//alert(b);
			var ttl=qty*rate;
			//alert(c);
			$("#txt_total").val(ttl);
			});
			});
			</script>
<html>
<head><center>
<h1><font color="green">PURCHASE DETAILS</h1></font>
</head>
<form name="purchase.php" action="cart_action.php" method="post">
<body>
      <table>
		  <tr> 
		  <td>Name</td><td><input type="text" name="slb_Customer_id" id="slb_Customer_id" value="<?php echo $row['F_name'];?> <?php echo $row['L_name'];?>" readonly="readonly">
          <tr>
          <td><b>Date</b></td>
          <td><input type="text" name="txt_purchase_date" id="txt_purchase_date" value="<?php echo date("Y/m/d") ?>" readonly="readonly"></td>
          </tr>
		  <tr>
          <td><b>Item</b></td>
          <td><input type="text" name="item" id="item" value="<?php echo $row1['Item_name']; ?>" readonly="readonly"></td>
          </tr>
          <tr>
          <td><b>Amount</b></td>
          <td><input type="text" name="txt_Amount" id="txt_Amount" value="<?php echo $rate;?>"readonly="readonly"></td>
          </tr>
          <tr>
          <td><b>Quantity</b></td>
          <td><input type="text" name="txt_qty" id="txt_qty"></td>
          </tr>
		 <tr>
          <td><b>Total</b></td>
          <td><input type="text" name="txt_total" id="txt_total"></td>
          </tr>
		 <tr>
          <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Continue"></td>
          </tr>
</table>
</body>
</html>




