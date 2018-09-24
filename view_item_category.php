<?php
include 'admin_header.php';
?>
<html>
<head><center><br><br>
<h1><font color="green">ITEM CATEGORIES</font></h1><br>
				<?php
$res1=mysqli_query($con,"select * from `tbl_item_category`");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<font color=red size=3>No Item Categories Added Yet !!!</font>";
}
else
{
?>
</head>
<form name="view_item_category.php" action="#" method="post" >
<body>

<center><table width=75% align "center">
<tr><th>Id</th>
<th>Category name</th>
<th>Description</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include 'dbconnect.php';
$results=mysqli_query($con,"select * from `tbl_item_category`");
$i=1;
while($row=mysqli_fetch_array($results))
{
	?>
		
  <?php
echo "<tr><td>$i</td>
	<td>$row[Item_Cat_name]</td>
	<td>$row[Description]</td>
	<td><a href='edit_item_category.php?uid=$row[Item_Cat_id]'><img src=images/edit.ico width=24px></a></td>";
	?>
	<td><a href="delete_item_category.php?uid=<?php echo $row['Item_Cat_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
<?php	
	$i++;
}
}
?>
</table>
<br><br><a href="add_item_category.php">Add New Category</a>
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
    background-color:#6aa21d;
    color: white;
}
</style>