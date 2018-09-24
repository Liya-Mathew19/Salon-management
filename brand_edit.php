
<?php
include 'dbconnect.php';
include 'admin_header.php';
$kid =$_GET['uid'];
$select_details = "SELECT * FROM `tbl_brand` WHERE `Brand_id` = '$kid'";
$result = mysqli_query($con , $select_details);
while($row =mysqli_fetch_array($result))
{
?>
<div><br><center><font color="green"><h1><b>EDIT BRAND</font></b></h1><br><br>
<body>
<form action="#" method="post">
<table><font size="4"><tr>
<tr><td><b>Brand Name: <input type="text" name="brand" value="<?php echo $row['Brand_name'];?>"></b></td></tr>
<tr>
<tr><td><input type="submit" name="submit" value="UPDATE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	$n=$_POST['brand']; 
		$edit=mysqli_query($con,"UPDATE `tbl_brand` SET `Brand_name`='$n' where Brand_id='$kid'");
		header("location:view_brand.php");
}
?>

