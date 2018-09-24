<?php
include 'dbconnect.php';
include 'customer_header.php';
?>
<html>
<h1><font color="green"><center>APPOINTMENT STATUS</font></h1><br>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_appointment` WHERE `Reg_no`='$_SESSION[Reg_id]' and `Status`!='2' and `Status`!='5'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Services Booked !!!</font></center>";
}
else
{
?>
<table>
<table border=2 width=70%>
<tr>
<th>SL.NO</th>
<th>SERVICE</th>
<th>DATE</th>
<th>TIME</th>
<th>STAFF PREFERRED</th>
<th>STATUS</th>
<th>DELETE</th>
<th></th></tr>
<?php

	$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` WHERE `Reg_no`='$_SESSION[Reg_id]' and `Status`!='5' and `Status`!='2'");
	$i=1;
	/*$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$_SESSION[Reg_id]'")
		$row1=mysqli_fetch_array($res1);*/
		
	while($row=mysqli_fetch_array($res))
	{
		$a=$row['ser_cat_id'];
		$r=$row['Staff_id'];
	$res1=mysqli_query($con,"SELECT * FROM `tbl_category` WHERE `ser_cat_id`='$a'");
	$row1=mysqli_fetch_array($res1);
	$res2=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Reg_id`='$r'");
	$row2=mysqli_fetch_array($res2);
	?>
	<tr><td><center><?php echo $i?></td>
<td><center><?php echo $row1['ser_cat_name'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row['Time'];?></td>
<td><center><?php echo $row2['F_name'];?> <?php echo $row2['L_name'];?></td>
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
?><td><center><font color="green"><b><?php echo "Approved";?></b></td>
<?php
 }
 else if($s==3)
{
?><td><center><font color="green"><b><?php echo "Rejected";?></b></td>
<?php } 
else if($s==5 || $s==4)
{
?><td><center><font color="green"><b><?php echo "Serviced";?></b></td>
<?php } ?>
<td><a href="appointment_delete.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>

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
        background-color: #6ea522;
    color: white;
}
</style>