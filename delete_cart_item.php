<?php
include 'dbconnect.php';
session_start();
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_purchase` WHERE Pur_id='$kid'");
header("location:cart_view.php?uid=$_SESSION[Reg_id]");
?>