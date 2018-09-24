<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from tbl_appointment where App_id='$kid'");
	$res=mysqli_query($con,"UPDATE `tbl_appointment` SET `Status`='4' WHERE App_id='$kid'");
header("location:schedules.php");
?>