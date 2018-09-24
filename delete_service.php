<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_service_category` WHERE Cat_id='$kid'");
$res2=mysqli_query($con,"DELETE FROM `tbl_category` WHERE Cat_id='$kid'");
header("location:view_service.php");
?>