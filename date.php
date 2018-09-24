<?php
include 'admin_header.php';
?>
<form action="#" method="post">
<h1><font color="green">Appointment Requests</h1> </font>
Select Date: <input type="date" name="date"><br><br>
<center><input type="submit" name="submit" Value="Search">
<?php
include 'dbconnect.php';
if(isset($_POST['submit']))
{
	$d=$_POST['date'];
	$sql=mysqli_query($con,"select * from tbl_appointment where `Status`='1' and Date='$d'");
	$row=mysqli_fetch_array($sql);
		
	
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>SERVICE</th>
<th>DATE</th>
<th>TIME</th>
<th>STAFF</th>
<th>REJECT</th>
<th></th></tr>
<?php
$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Status`='1' and Date='$d'");
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
<td><center><?php echo $row3['F_name'];?> <?php echo $row3['L_name'];?></td>
<td><center><a href="delete_app_request.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="30px"></a></td></tr>
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
	