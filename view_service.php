<?php
include 'admin_header.php';
?>
<html>
<head><center><br><br>
<h1><font color="green">SERVICES</font></h1><br>
				<?php
$res1=mysqli_query($con,"select * from `tbl_service_category`");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<font color=red size=3>No Services Added Yet !!!</font>";
}
else
{
?>
</head>
<form name="view_service.php" action="#" method="post" >
<body>

<table width=75% align "center">
<tr><th>Id</th>
<th>Service name</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include 'dbconnect.php';
$results=mysqli_query($con,"select * from `tbl_service_category`");
$i=1;
while($row=mysqli_fetch_array($results))
{
	?>
		
  <?php
echo "<tr><td>$i</td>
	<td>$row[Cat_name]</td>
	<td><a href='edit_service.php?uid=$row[Cat_id]'><img src=images/edit.ico width=24px></a></td>";
	?>
	<td><a href="delete_service.php?uid=<?php echo $row['Cat_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
<?php	
	$i++;
}
}
?>
</table>
<br><br><a href="add_service.php">Add New Services</a>
<br>
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
    background-color: #6aa21d;;
    color: white;
}
</style>