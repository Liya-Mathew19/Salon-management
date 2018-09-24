<?php
include "customer_header.php";
include 'dbconnect.php';
//$id=$_GET['uid'];
$uname=$_SESSION['username'];
$sel="select Reg_id,F_name from tbl_registration Where Email='$uname'";
$qry=mysqli_query($con,$sel);
$ans=mysqli_fetch_array($qry);
$custid=$ans['Reg_id'];
$custname=$ans['F_name'];
$_SESSION['uid']=$_GET['uid'];
?>
<html>
<head>
<h1><font color="green">PAYMENT DETAILS</font></h1>
</head>
<script type="text/javascript">
function validate()
{
 var  dvar1 = document.getElementById("slb_Customer_id");
if(dvar1.value=="")
{
 alert("Select Customer Name ...");
dvar1.focus();
return false;
}
 var  dvar2 = document.getElementById("txt_Card_no");
if(dvar2.value=="")
{
 alert("Enter Card_no...");
dvar2.focus();
return false;
}
else
	{
	  
	   var expn=/^[0-9]+$/;
                if(dvar2.value.match(expn))
	     {
		    if(dvar2.value.length!=12)
		
		 {alert("Enter a valid  card number"); 
				 	  dvar2.focus();
                 return false;
		}
            }
         else
        {
                 alert("Enter a valid  card number"); 
				 	  dvar2.focus();
                 return false;
				 
         }
        }
 var  dvar3 = document.getElementById("txt_Pass_key");
if(dvar3.value=="")
{
 alert("Enter Pass_key...");
dvar3.focus();
return false;
}
 var  dvar4 = document.getElementById("txt_Bank_Name");
if(dvar4.value=="")
{
 alert("Enter Bank_Name...");
dvar4.focus();
return false;
}
 var  dvar5 = document.getElementById("txt_Expiry_Date");
if(dvar5.value=="")
{
 alert("Enter Expiry_Date...");
dvar5.focus();
return false;
}
}
</script>
<form name="Credit_payment_Add.php" action="bill_payment_action.php" method="post" onSubmit="return validate()">
<body>
      <table>
          <tr>
           <td>Customer</td>
           <td><input type="text" name="cust_name" id="cust_name"/></td>
        
          <tr>
          <td><b>Card_no</b></td>
          <td><input type="text" name="txt_Card_no" id="txt_Card_no" value=""></td>
          </tr>
          <tr>
          <td><b>CVV</b></td>
          <td><input type="text" name="txt_cvv" id="txt_cvv" value=""></td>
          </tr>
          <tr>
          <td><b>Bank_name</b></td>
          <td><input type="text" name="txt_Bank_Name" id="txt_Bank_Name" value=""></td>
          </tr>
          <tr>
          <td><b>Expiry_date</b></td>
          <td><input type="date" name="txt_Expiry_Date" id="txt_Expiry_Date"></td>
          </tr>
          <tr>
          <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
          </tr>
</table>
<br><a href="cart_view.php?>"><img src="images/fleche.png" width="24px" style="    padding-left: 363px;">Back</a>
</body>
</html>
<?php
include "footer.php";
?>