<?php
include 'dbconnect.php';
session_start();
$kid=$_GET['uid'];
	$a=$_POST['itemname']; 
	$b=$_POST['brandname'];
	$d=$_POST['price'];
	$img=$_FILES['Image']['name'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `tbl_items` SET `Item_name`='$a',`Brand_id`='$b',`Item_price`='$d' where `Item_id`='$kid'");
	}
	else
	{
		move_uploaded_file($_FILES['Image']['tmp_name'],"Uploads/".$_FILES['Image']['name']);
	$edit=mysqli_query($con,"UPDATE `tbl_items` SET `Item_name`='$a',`Brand_id`='$b',`Item_price`='$d',`Item_image`='$img' where `Item_id`='$kid'");
	}
	header("location:view_itemcategory_action.php");

?>