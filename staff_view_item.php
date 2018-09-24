<?php
include 'staff_header.php';
?>
				<h1>ITEM DETAILS</h1><br>
</head>
<form name="view_item.php" action="#" method="post" >
<body>

<table width=75% align "center">
<tr><th>Id</th>
<th>Item Name</th>
<th>Brand Name</th>
<th>Category Name</th>
<th>Price</th>
<th>Image</th>
</tr>
<?php		
include 'dbconnect.php';
$kid=$_GET['uid'];
$results=mysqli_query($con,"select * from `tbl_items` where Item_Cat_id in (select Item_Cat_id from `tbl_item_category` where Item_Cat_id='$kid')");
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
<td><img src=uploads/$row[Item_image]  height=100 width=200/></td>";
$i++;
}
?>
</table>
<td><a href="staff_item_select.php"><img src="images/fleche.png" width="24px" style="    padding-left: 363px;">Back</td></tr></a>
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
