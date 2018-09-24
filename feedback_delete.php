<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE from `tbl_feedback` WHERE Feed_id='$kid'");
header("location:feedback_show.php");
?>