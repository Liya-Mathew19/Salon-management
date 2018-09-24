<?php
include 'dbconnect.php';
if(isset($_POST['cmd']))
{
	$k=$_GET['uid'];
	$b=$_POST['item_category_name'];
	$c=$_POST['description'];
	$edit=mysqli_query($con,"UPDATE `tbl_item_category` SET `Item_Cat_name`='$b',`Description`='$c' where `Item_Cat_id`='$k'");
	header("location:view_item_category.php");
}
?>