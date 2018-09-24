<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_brand` WHERE Brand_id='$kid'");
$resl=mysqli_query($con,"DELETE FROM `tbl_items` WHERE Brand_id='$kid'");
header("location:view_brand.php");
?>