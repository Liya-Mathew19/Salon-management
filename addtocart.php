<?php
include 'customer_header.php';
include 'dbconnect.php';
?>
				<head><center><br><br>
<h1><font color="green">ITEMS ADDED TO CART</h1><br></font>
</head>
<form name="view_service.php" action="#" method="post" >
<body>

<table width=75% align "center">
<tr><th>Id</th>
<th>Image</th>
<th>Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Sub-Total</th>
<th>Remove Item</th>
</tr>
<?php
$results=mysqli_query($con,"select * from `tbl_purchase`");
$i=1;
while($row=mysqli_fetch_array($results))
{
	?>
<tr><td><?php echo $i;?></td>
<td><?php echo $row['Date'];?></td>
<td><?php echo $row['Feed_msg'];?></td>
<td><a href='feedback_edit.php?uid=<?php echo $row['Feed_id']?>'><img src="images/edit.ico" width="24px"></a></td>
<td><a href="feedback_delete.php?uid=<?php echo $row['Feed_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
<?php
$i++;
}

?>
</table>
<br><br><a href="feedback.php">Add Feedback</a>
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
    background-color: #4CAF50;
    color: white;
}
</style>