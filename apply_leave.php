<?php
include 'staff_header.php';
?>
<html>
<body background="images/b34c146185a29f9ec8de118126f9d76a.jpg">
<h1><font color=green><center>LEAVE APPLICATION</h1></font>
<center><form action="#" method="post" >
<table>
<tr><td>DATE:</td><td><input type="date" name="date" required/></td></tr>
<tr><td>SECTION:</td><td><select name="section">
<option value="1">..select..</option>
<option value="FN">FN</option>
<option value="AN">AN</option>
<option value="FULL DAY">FULL DAY</option>
</select></td></tr>
<tr><td>REASON:</td><td><textarea name="reason" required></textarea></td></tr>
<tr><td></td><td><input type="submit" value="APPLY" name="submit"/></td></tr>
<?php
if(isset($_POST['submit']))
{

	$a=$_SESSION["Reg_id"];
	$c=$_POST["date"];
	$d=$_POST["section"];
	$e=$_POST["reason"];
	$sql="INSERT INTO `tbl_leave`(`Reg_id`, `Section`,`Date`, `Reason`,`Status`)VALUES ('$a','$d','$c','$e','Requested')";
	$result=mysqli_query($con,$sql);
	header("Location:leave_status.php");
	
}

?>
</body>
</html>
