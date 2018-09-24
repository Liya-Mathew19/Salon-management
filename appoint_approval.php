<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from tbl_appointment where App_id='$kid'");
	$res=mysqli_query($con,"UPDATE `tbl_appointment` SET `Status`='0' WHERE App_id='$kid'");
header("location:admin_app_aprove.php");
?>