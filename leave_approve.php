<?php
include 'admin_header.php';
?>
<h1><font color="Green">LEAVE REQUESTS</h1></font>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_leave` where `Status`='Requested'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Leave Requests Yet!!!</font></center>";
}
else
{
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>SECTION</th>
<th>DATE</th>
<th>REASON</th>
<th>STATUS</th>
<th>APPROVE</th>
<th>REJECT</th>
<th></th></tr>
<?php
include 'dbconnect.php';
$a=$_SESSION['Reg_id'];
	$res=mysqli_query($con,"SELECT * FROM `tbl_leave` where `Status`='Requested'");
	$i=1;
	while($row=mysqli_fetch_array($res))
	{
		$kid=$row['Reg_id'];
		$res1=mysqli_query($con,"SELECT F_name FROM `tbl_registration` where Reg_id='$kid'");
	$row1=mysqli_fetch_array($res1);
	?>
	<tr><td><center><?php echo $i?></td>
<td><center><?php echo $row1['F_name'];?></td>
<td><center><?php echo $row['Section'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row['Reason'];?></td>
<td><center><font color="green"><b><?php echo $row['Status'];?></b></td>
<td><center><a href="leave_approval.php?uid=<?php echo $row['Leave_id'];?>" onclick="return confirm('Approve the Leave??')"><img src="images/symbol_check.png" width="30px"></a></td>
<td><center><a href="leave_reject.php?uid=<?php echo $row['Leave_id'];?>" onclick="return confirm('Are you sure want to reject the request??')"><img src="images/DeleteRed.png" width="30px"></a></td></tr>
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
    background-color: #6aa21d;
    color: white;
}
</style>