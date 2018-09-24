<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
session_start();
$res1=mysqli_query($con,"select * from tbl_appointment where App_id='$kid'");
	$res=mysqli_query($con,"UPDATE `tbl_appointment` SET `Status`='2' WHERE App_id='$kid'");
header("location:staff_appointment_status.php?uid=$_SESSION[Reg_id]");
?>