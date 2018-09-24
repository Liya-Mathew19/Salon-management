<?php
include 'dbconnect.php';
session_start();
	//$rm=$_SESSION['Reg_id'];
	$rm=$_SESSION['uid'];
	$a=$_POST['cust_name'];
	$b=$_POST['txt_Card_no'];
	$d=$_POST['txt_cvv'];
	$c=$_POST['txt_Bank_Name'];
	$e=$_POST['txt_Expiry_Date'];
	$res=mysqli_query($con,"SELECT * FROM `tbl_payment` WHERE `Name`='$a' and `Card_no`='$b' and `Expiry`='$e' and `Cvv`='$d'");
	$row=mysqli_fetch_array($res);
	if($a=$row['Name'] and $b=$row['Card_no'] and $c=$row['Expiry']and $d=$row['Cvv'])
	{
	$sql1=mysqli_query($con,"UPDATE `tbl_appointment` SET `Status`='5' WHERE `App_id`='$rm'");
	echo "<script language='javascript'>window.alert('Your Payment Details Entered Successfully!!')
		   window.location.href='payment_bill.php?uid=$_SESSION[Reg_id]'</script>";
	}
else
	{
		echo "<script language='javascript'>window.alert('Invalid Bank Details!!')
		   window.location.href='payment_bill.php?uid=$_SESSION[Reg_id]'</script>";
	}

?>