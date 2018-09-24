<?php
include 'admin_header.php';
?>
								<html>
<body background="images/1440x900.jpg">
<h1><font color="green">CUSTOMER DETAILS</h1></font>
<form action="#" method="post" enctype="multipart/form-data">
<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$result=mysqli_query($con,"select * from tbl_registration where `Reg_id`='$kid'");
$i=1;
while($row=mysqli_fetch_array($result))
{
	$a=$row['Dis_id'];
	$result1=mysqli_query($con,"select * from tbl_district where Dis_id='$a'");
	$row1=mysqli_fetch_array($result1);
?>
<table width=50%>
<img src="uploads/<?php echo $row['Image'];?>" alt="" height="270" width="246"     style="padding-left: 430px; margin-bottom: -263px;"/>
<tr><td>Name:&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  <?php echo $row['F_name'];?>&nbsp <?php echo $row['L_name'];?></td></tr>
<tr><td>Gender:&nbsp&nbsp &nbsp &nbsp &nbsp <?php echo $row['Gender'];?></td></tr>
<tr><td>House Name:&nbsp<?php echo $row['House_name'];?></td></tr>
<tr><td>City:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $row['City'];?></td></tr>
<tr><td>District:&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  <?php echo $row1['Dis_name'];?></td></tr>
<tr><td>Mobile:&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  <?php echo $row['Mobile'];?></td></tr>
<tr><td>Email:&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <?php echo $row['Email'];?></td></tr>
<td><br><br><a href="admin_customer_view.php?>"><img src="images/fleche.png" width="35px">Back To Previous Page</td></tr></a>
<?php
$i++;
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