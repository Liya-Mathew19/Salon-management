<?php
include 'admin_header.php';
?>
<h1><font color="green"><center>CUSTOMER PURCHASE REQUESTS</h1></font>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_purchase` where status=0");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Purchase Requests Yet !!!</font></center>";
}
else
{
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>DATE</th>
<th>ITEM NAME</th>
<th>ITEM IMAGE</th>
<th>ITEM PRICE</th>
<th>QUANTITY</th>
<th>STATUS</th></tr>
<?php
include 'dbconnect.php';
$a=$_SESSION['Reg_id'];
	$res=mysqli_query($con,"SELECT * FROM `tbl_purchase` where status=0");
	$i=1;
	while($row=mysqli_fetch_array($res))
	{$kid=$row['Reg_id'];
		$res1=mysqli_query($con,"SELECT F_name FROM `tbl_registration` where Reg_id='$kid'");
	$row1=mysqli_fetch_array($res1);
	$k=$row['Item_id'];
		$res2=mysqli_query($con,"SELECT * FROM `tbl_items` where Item_id='$k'");
	$row2=mysqli_fetch_array($res2);
	?>
	
	<tr><td><center><?php echo $i?></td>
<td><center><?php echo $row1['F_name'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row2['Item_name'];?></td>
<td><center><img src="Uploads/<?php echo $row2['Item_image'];?>" width=80 height=80></td>
<td><center><?php echo $row2['Item_price'];?></td>
<td><center><?php echo $row['Quantity'];?></td>
<td><center><a href="app_purchase.php?uid=<?php echo $row['Pur_id'];?>" onclick="return confirm('Approve this purchase request??')"><img src="images/symbol_check.png" width="30px"></a></td></tr>
<?php
$i++;
	}
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
    background-color: #6aa21d;
    color: white;
}
</style>