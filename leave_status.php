
<?php
include 'dbconnect.php';
include 'staff_header.php';
?>
				<html>
<h1><font color=green><center>LEAVE APPLICATION</h1></font>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_leave` WHERE `Reg_id`='$_SESSION[Reg_id]'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Leave Applied !!!</font></center>";
}
else
{
?>
<table>
<table border=2 width=70%>
<tr>
<th>SL.NO</th>
<th>SECTION</th>
<th>DATE</th>
<th>REASON</th>
<th>STATUS</th>
<th>DELETE</th>
<th></th></tr>

<?php

	$res=mysqli_query($con,"SELECT * FROM `tbl_leave` WHERE `Reg_id`='$_SESSION[Reg_id]'");
	$i=1;
	/*$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$_SESSION[Reg_id]'")
		$row1=mysqli_fetch_array($res1);*/
	while($row=mysqli_fetch_array($res))
	{
	
	?>

	<tr><td><center><?php echo $i?></td>
<td><center><?php echo $row['Section'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row['Reason'];?></td>
<td><center><font color="green"><b><?php echo $row['Status'];?></b></td>
<td><a href="delete_leave.php?uid=<?php echo $row['Leave_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
<?php
$i++;
}}
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>