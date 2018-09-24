<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_category` WHERE ser_cat_id='$kid'");
header("location:view_category_action.php");
?>