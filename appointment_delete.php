<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$resl=mysqli_query($con,"DELETE FROM `tbl_appointment` WHERE App_id='$kid'");
header("location:appointment_status.php");
?>