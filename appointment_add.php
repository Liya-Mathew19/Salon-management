
<?php
include 'customer_header.php';
?>
<?php
$uname=$_SESSION['username'];
include 'dbconnect.php';
$sel="select Reg_id,F_name from tbl_registration Where Email='$uname'";
$qry=mysqli_query($con,$sel);
$ans=mysqli_fetch_array($qry);
$custid=$ans['Reg_id'];
$custname=$ans['F_name'];


?>
<html>
<head><center>
<h1><font color="green"> SERVICE BOOKING</h1></font>
</head>
<script type="text/javascript">
function validate()
{
 var  dvar1 = document.getElementById("txt_Booking_date");
if(dvar1.value=="")
{
 alert("Enter Booking_date...");
dvar1.focus();
return false;
}
 var  dvar2 = document.getElementById("slb_Customer_id");
if(dvar2.value=="")
{
 alert("Select Customer Name ...");
dvar2.focus();
return false;
}
 var  dvar3 = document.getElementById("slb_Package_id");
if(dvar3.value=="")
{
 alert("Select Package Name ...");
dvar3.focus();
return false;
}
 var  dvar4 = document.getElementById("txt_Amount");
if(dvar4.value=="")
{
 alert("Enter Amount...");
dvar4.focus();
return false;
}

}
</script>
<script type="text/javascript" src="calender/js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="calender/js/jquery-ui-1.8.14.custom.min.js"></script>
<link type="text/css" href="calender/css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function()
{
$("#slb_Package_id").change(function()
{
 alert($(this).val());
$.post('Package_booking_Add_jqry.php',{id: $(this).val()}, function(data)
{
 alert(data);
 $("#txt_Amount").val(data);
});
});
});
</script>
<link href="jquery.timepicker.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script type="text/javascript" src="jquery.timepicker.js"></script>
  <script type="text/javascript" src="jquery.timepicker.min.css"></script> <script type="text/javascript" src="jquery.timepicker.min.js"></script>
 <script>$(function(){$('#time').timepicker();});</script>
 

<form name="Package_booking_Add.php" action="appointment_action.php" method="post" onSubmit="return validate()">
<body>
      <table>
      <tr> <td>Name</td><td><input type="text" name="slb_Customer_id" id="slb_Customer_id" value="<?php echo $custname; ?>" readonly="readonly">
          <tr>
          <td><b>Date</b></td>
          <td><input type="text" name="txt_Booking_date" id="txt_Booking_date" value="<?php echo date("Y/m/d") ?>" readonly="readonly"></td>
          </tr>
          <!--<tr>
          <td><b>Customer</b></td>
          <td><select  name="slb_Customer_id"  id="slb_Customer_id">
     <?php
      
      $var="select * from tbl_registration";
      $result=mysqli_query($con,$var);
        while($row=mysqli_fetch_array($result))
          { ?>
           <option value="<?php echo $row['Reg_id']; ?>"><?php echo $row['F_name']; ?></option>
          <?php } ?>
          </select>
          </td>
          </tr>-->
         <?php
      $kid=$_GET['uid'];
      $var="select * from tbl_category where ser_cat_id='$kid'";
      $result=mysqli_query($con,$var);
        while($row1=mysqli_fetch_array($result))
          { 
	  $x=$row1['Cat_id'];
	  $_SESSION['Cat_id']=$x;?>
	<tr>
          <td><b>Service</b></td>
          <td><input type="text" name="service" id="service" value="<?php echo $row1['ser_cat_name'];?>"readonly="readonly"></td>
          </tr>
          <tr>
          <td><b>Amount</b></td>
          <td><input type="text" name="txt_Amount" id="txt_Amount" value="<?php echo $row1['ser_cat_price'];?>"readonly="readonly"></td>
          </tr>
          <tr>
          <td><b>Appoinment_date</b></td>
          <td><input type="date" name="txt_Appoinment_Date" id="txt_Appoinment_Date" value="<?php echo date("Y-m-d")?>" min="<?php echo date("Y-m-d")?>" required></td>
          </tr>
		  
		  <tr>
          <td><b>Appoinment_time</b></td>
          <td><input type="time" name="time" id="time"  required/></td></tr>
		  <td><b>Staff Preferred</b></td>
          <td><select name="txt_staff">
		  <option>--Select--</option>
		  <?php
	
	   $res1=mysqli_query($con,"SELECT * FROM `tbl_staff` where `Cat_id`='$x' ");
		 while($row2=mysqli_fetch_array($res1))
		  {  
	  $y=$row2['Reg_id'];
	   $res=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Reg_id`='$y'");
		  $row3=mysqli_fetch_array($res);
	   
		  ?>
		  <option value = <?php echo $row3['Reg_id'];?>>	  <?php echo $row3['F_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></td>
          </tr>
          </tr>
		  
		  <?php
		  }
		  ?>
          <tr>
          <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Book"></td>
          </tr>
</table>
</body>
</html>
<?php
include "footer.php";
?>
 