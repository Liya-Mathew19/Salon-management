<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from tbl_purchase where Pur_id='$kid'");
	$res=mysqli_query($con,"UPDATE `tbl_purchase` SET `Status`='2' WHERE Pur_id='$kid'");
header("location:transactions.php");
?>