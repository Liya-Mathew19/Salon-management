<?php
include 'admin_header.php';
include 'dbconnect.php';

?>
	</head>
<body>
<?php
$x=$_SESSION['categories'];
$res1=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<font color=red size=3><center>No Service Category Added Yet !!!</font></center>";
}
else
{
?>
<table width=75% align "center">
<tr><th>Id</th>
<th>Category name</th>
<th>Price</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
$x=$_SESSION['categories'];
$results=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
$i=1;
$results1=mysqli_query($con,"select Cat_name from `tbl_service_category` where Cat_id='$x'");
$row1=mysqli_fetch_array($results1);

?>
<h1><font color="green"> <center>
<?php
echo $row1['Cat_name'];
?>
</h1></font>
<?php
while($row=mysqli_fetch_array($results))
{?>
	
  <?php
echo "<tr><td>$i</td>
	<td>$row[ser_cat_name]</td>
	<td>$row[ser_cat_price]</td>
	<td><a href='edit_category.php?uid=$row[ser_cat_id]'><img src=images/edit.ico width=24px></a></td>";
?>
<td><a href="delete_category.php?uid=<?php echo $row['ser_cat_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
<?php	
	$i++;
}}
?>
</table><td>
<br><br><br><a href="view_category.php"><img src="images/fleche.png" width="24px" style="    padding-left: 363px;">Back</a>
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