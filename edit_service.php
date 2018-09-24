<?php
include 'admin_header.php';
?>
<html>
<head><br><br>
<h1><font color="green">EDIT SERVICES</font></h1><br>
</head>
<form name="view_service.php" action="#" method="post">
<body>

<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"select * from `tbl_service_category` where Cat_id='$kid'");
while($row=mysqli_fetch_array($res))
{
?>
<body>
<form action="#" method="post">
<table>
<tr>
<td><b>SERVICE_NAME:</b></td><td><input type="text" name="service_name" value="<?php echo $row['Cat_name'];?>"/></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Save"></td></tr>
</table>
</form>
</body>
<?php
}
if(isset($_POST["submit"]))
{
	$n=$_POST["service_name"];
	$edit=mysqli_query($con,"UPDATE `tbl_service_category` SET `Cat_name`='$n' WHERE Cat_id='$kid'");
	header("location:view_service.php");
}	
?>