<?php
include 'staff_header.php';
?>
				<h1><font color="Green"><center>APPOINTMENT REQUESTS</h1></font>
				<?php
$kid=$_GET['uid'];
$r=mysqli_query($con,"Select * from `tbl_staff` where `Reg_id`='$kid'");
$r1=mysqli_fetch_array($r);
$x=$r1['Cat_id'];
$res1=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Cat_id`='$x' and `Status`='1'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Appointments Yet !!!</font></center>";
}
else
{
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>SERVICE</th>
<th>DATE</th>
<th>TIME</th>
<th>STAFF PREFERRED</th>
<th>STATUS</th>
<th>SERVICE STATUS</th>
<th></th></tr>
<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$r=mysqli_query($con,"Select * from `tbl_staff` where `Reg_id`='$kid'");
$r1=mysqli_fetch_array($r);
$a=$_SESSION['Reg_id'];
$x=$r1['Cat_id'];
$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Cat_id`='$x' and `Status`='1' and `Staff_id`='$kid'");
	$i=1;	
	while($row=mysqli_fetch_array($res))
	{
		$a=$row['ser_cat_id'];
		$b=$row['Reg_no'];
		$c=$row['Staff_id'];
	$res1=mysqli_query($con,"SELECT * FROM `tbl_category` WHERE `ser_cat_id`='$a'");
	$row1=mysqli_fetch_array($res1);
	$res2=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$b'");
	$row2=mysqli_fetch_array($res2);
	$res3=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$c'");
	$row3=mysqli_fetch_array($res3);
	?>
	<tr><td><center><?php echo $i?></td>
	<td><center><?php echo $row2['F_name'];?></td>
<td><center><?php echo $row1['ser_cat_name'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row['Time'];?></td>
<td><center><?php echo $row3['F_name'];?></td>
<?php
$s=$row['Status'];
if($s==1)
{
?>
<td><center><font color="green"><b><?php echo "Requested";?></b></td>
<?php
}
else if($s==0)
{
?><td><center><font color="green"><b><?php echo "Approved";?></b></td><?php }?>
<td><center><a href="staff_appoint_service.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Serviced this customer??')"><img src="images/symbol_check.png" width="30px"></a></td>
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
