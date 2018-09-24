<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_registration` WHERE Reg_id='$kid'");
$res3=mysqli_query($con,"DELETE FROM `tbl_login` WHERE Reg_id='$kid'");
header("location:login.php");
?>