
<?php
include 'dbconnect.php';

include 'staff_header.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"delete from `tbl_leave` where `Leave_id`='$kid'");
header("location:leave_status.php");
?>