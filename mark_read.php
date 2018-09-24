<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from tbl_feedback where Feed_id='$kid'");
	$res=mysqli_query($con,"UPDATE `tbl_feedback` SET `Status`='0' WHERE Feed_id='$kid'");
header("location:admin_feedback_view.php");
?>