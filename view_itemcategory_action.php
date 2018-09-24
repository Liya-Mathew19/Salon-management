<?php
include 'admin_header.php';
?>
				<h1><font color="green"><center>ITEM DETAILS</h1></font><br>
</head>
		<?php
$x=$_SESSION['categories'];
$res1=mysqli_query($con,"select * from `tbl_items` where Item_Cat_id in (select Item_Cat_id from `tbl_item_category` where Item_Cat_id='$x')");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<font color=red size=3><center>No Items Added Yet !!!</font></center>";
}
else
{
?>
<form name="view_item.php" action="#" method="post" >
<body>

<table width=100% align "center">
<tr><th>Id</th>
<th>Item Name</th>
<th>Brand Name</th>
<th>Category Name</th>
<th>Price</th>
<th>Available Quantity</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include 'dbconnect.php';
$x=$_SESSION['categories'];
$results=mysqli_query($con,"select * from `tbl_items` where Item_Cat_id in (select Item_Cat_id from `tbl_item_category` where Item_Cat_id='$x')");
$i=1;
while($row=mysqli_fetch_array($results))
{
	$b=$row['Brand_id'];
	$results1=mysqli_query($con,"select * from `tbl_brand` where Brand_id='$b'");
	$row1=mysqli_fetch_array($results1);
	$a=$row['Item_Cat_id'];
	$results2=mysqli_query($con,"select * from `tbl_item_category` where Item_Cat_id='$a'");
	$row2=mysqli_fetch_array($results2);
	?>
  <?php
echo "<tr><td>$i</td>
<td>$row[Item_name]</td>
<td>$row1[Brand_name]</td>
<td>$row2[Item_Cat_name]</td>
<td>$row[Item_price]</td>
<td>$row[Item_stock]</td>
<td><img src=uploads/$row[Item_image]  height=100 width=200/></td>
<td><a href='item_edit.php?uid=$row[Item_id]'><img src=images/edit.ico width=24px></a></td>";
?>
	<td><a href="item_delete.php?uid=<?php echo $row['Item_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
	<?php
$i++;
}
}
?>
</table>
<br><br><a href="admin_item_view.php"><img src="images/fleche.png" width="35px">Back To Previous Page</a>
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