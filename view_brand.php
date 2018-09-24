<?php
include 'admin_header.php';
?>
				<h1><center><font color="green">BRAND DETAILS</h1><br></font>
</head>
<?php
$res1=mysqli_query($con,"select * from `tbl_brand`");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<font color=red size=3><center>No Brands Added Yet !!!</font>";
}
else
{
?>
<form name="view_item.php" action="#" method="post" >
<body>

<table width=75% align "center">
<tr><th>Id</th>
<th>Brand Name</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include 'dbconnect.php';
$results=mysqli_query($con,"select * from `tbl_brand`");
$i=1;
while($row=mysqli_fetch_array($results))
{
	?>

  <?php
echo "<tr><td>$i</td>
<td>$row[Brand_name]</td>
<td><a href='brand_edit.php?uid=$row[Brand_id]'><img src=images/edit.ico width=24px></a></td>";	
?>
<td><a href="brand_delete.php?uid=<?php echo $row['Brand_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
<?php
$i++;
}
}
?>
</table>
<br><br><a href="add_brand.php">Add Brand</a>
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
    background-color: #6aa21d;
    color: white;
}
</style>