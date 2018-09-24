<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_items` WHERE Item_id='$kid'");
header("location:view_itemcategory_action.php");
?>