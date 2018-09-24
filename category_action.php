 <?php
 include 'dbconnect.php';
if(isset($_POST['cmd']))
  {
	  $service_name=$_POST['service_name'];
	  $category_name=$_POST['category_name'];
	  $amount=$_POST['category_price'];
	  $sel1="select * from `tbl_category` where `Cat_id`='$service_name' and `ser_cat_name`='$category_name' and `ser_cat_price`='$amount'";
	  $qry1=mysqli_query($con,$sel1);
	  $num=mysqli_num_rows($qry1);
	  if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Already added this category !!')
		   window.location.href='add_category.php'</script>");
	  }
	  else
	  {
	  $sql=mysqli_query($con,"INSERT INTO `tbl_category`(`Cat_id`, `ser_cat_name`, `ser_cat_price`,`status`) 
	  VALUES ('$service_name','$category_name','$amount','1')");
	  
	  if($sql)
	  {
		   echo ("<script language='javascript'>window.alert('Service Category Added Successfully!!')
		   window.location.href='add_category.php';</script>");
	  }
	  else
	  {
		   echo ("<script language='javascript'>window.alert('Addition Failed!!Try Again..')
		   window.location.href='add_category.php';</script>");
	  }
	  }
  }

  ?>