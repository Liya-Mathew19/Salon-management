<?php
include 'customer_header.php';
?>
<html>
<head><center><br><br>
<h1><font color="green">ITEMS IN CART</font></h1><br>
<?php
$y=$_GET['uid'];
$res1=mysqli_query($con,"select * from `tbl_purchase` where `Reg_id`='$y' and `Status`='1'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Items Purchased !!!</font></center>";
}
else
{
?>
</head>
<form name="view_service.php" action="#" method="post" >
<body>

<table width=75% align "center">
<tr><th>Id</th>
<th>Date</th>
<th>Image</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Total</th>
<th>Status</th>
<th>Remove</th>
</tr>
<?php
include 'dbconnect.php';
$x=1;
$results=mysqli_query($con,"SELECT * FROM `tbl_purchase` where `Reg_id`='$y' and `Status`='1'");
while($row=mysqli_fetch_array($results))
{
	$i=$row['Item_id'];
	$res=mysqli_query($con,"select * from `tbl_items` where `Item_id`='$i'");
	$row1=mysqli_fetch_array($res);
echo "<tr><td>$x</td>
<td>$row[Date]</td>
<td><img src=uploads/$row1[Item_image]  height=100 width=200/></td>
<td>$row1[Item_name]</td>
<td>$row[Quantity]</td>
<td>$row[Total]</td>";
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
<?php } ?>
<td><a href="delete_cart_item.php?uid=<?php echo $row['Pur_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" width="24px"></td></tr>
	<?php 
		$x++;
}

	$q="select SUM(`Total`) from tbl_purchase where `Reg_id`='$y'";
		$res=mysqli_query($con,$q);
		$n=mysqli_num_rows($res);
		for($i=0;$i<$n;$i++)
		{
			$row=mysqli_fetch_row($res);
			$tot=$row[0];
		}
	echo "<tr><td>Amount Payable:$tot</td></tr>";



?>

</table><br><br>
<a href="customer_item_select.php"><img src="images/continue shopping.png"></a>
<a href="purchase_details.php"><img src="images/placeorder.png" style="    padding-left: 600px;"></a>
<?php
}
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