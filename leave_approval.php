<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from tbl_leave where Leave_id='$kid'");
	$res=mysqli_query($con,"UPDATE `tbl_leave` SET `Status`='APPROVED' WHERE Leave_id='$kid'");
header("location:leave_approve.php");
?>