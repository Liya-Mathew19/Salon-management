<?php
include 'dbconnect.php';

$bname=$_POST["txtBrandName"];
$sel1="select * from `tbl_brand` where `Brand_name`='$bname'";
	  $qry1=mysqli_query($con,$sel1);
	  $num=mysqli_num_rows($qry1);
	  if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Already added this Brand !!')
		   window.location.href='add_brand.php'</script>");
	  }
	  else
	  {
	$sql=mysqli_query($con,"INSERT INTO `tbl_brand`(`Brand_name`, `Status`) VALUES ('$bname','1')");
	 if($sql)
	  {
		   echo ("<script language='javascript'>window.alert('Brand Added Successfully!!')
		   window.location.href='add_brand.php';</script>");
	  }
	  else
	  {
		   echo ("<script language='javascript'>window.alert('Failed!!')
		   window.location.href='add_brand.php';</script>");
	  }
	  }
	
?>