<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_item_category` WHERE Item_Cat_id='$kid'");
$res2=mysqli_query($con,"DELETE FROM `tbl_Items` WHERE Item_Cat_id='$kid'");
header("location:view_item_category.php");
?>