<?php
include 'dbconnect.php';
if(isset($_POST['cmd']))
{
	session_start();
$kid =$_SESSION['Reg_id'];
$var_Feedback_Date=$_POST['txt_Feedback_Date'];
$var_Feedback=$_POST['txt_Feedback']; 
		  //$z=$_SESSION['Reg_id'];
$varsql="insert into `tbl_feedback` (`Reg_id`,`Date`,`Feed_msg`,`status`) values('$kid','$var_Feedback_Date','$var_Feedback','1')";
$varresult=mysqli_query($con,$varsql);
header("Location:feedback_show.php");
}
?>