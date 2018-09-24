<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<h1><font color="green">CUSTOMER PURCHASE REQUESTS</h1> </font>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_purchase` where `Status`=0");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Purchase Requests!!!</font></center>";
}
else
{
?>
<table>
          <td><font size=5> 
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_purchase` where `Status`=0");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  { 
	  $kid=$row['Reg_id'];
		$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where Reg_id='$kid'");
	$row1=mysqli_fetch_array($res1);
	
echo "<br>".$i. ".";	  
		  ?>
		 
		 <a href= "transactions.php?uid=<?php echo $row1['Reg_id'];?>"<?php echo $row1['Reg_id'];?>>	  <?php echo $row1['F_name']; ?>&nbsp<?php echo $row1['L_name']; ?> </a><br>
		  <?php
		  $i++;
}}
		  ?></a>
		  </td>
          </tr></table>
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