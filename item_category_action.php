 <?php
 include 'dbconnect.php';
	  $category_name=$_POST['txt_category_name'];
	  $category_desc=$_POST['txt_category_desc'];
	  $sel1="select * from `tbl_item_category` where `Item_Cat_name`='$category_name' and `Description`='$category_desc'";
	  $qry1=mysqli_query($con,$sel1);
	  $num=mysqli_num_rows($qry1);
	  if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Already added this category !!')
		   window.location.href='add_item_category.php'</script>");
	  }
	  else
	  {
	  $sql=mysqli_query($con,"INSERT INTO `tbl_item_category`(`Item_Cat_name`, `Description`, `Status`) VALUES ('$category_name','$category_desc',1)");
	   if($sql)
	  {
		   echo ("<script language='javascript'>window.alert('Item Category Added Successfully!!')
		   window.location.href='add_item_category.php';</script>");
	  }
	  else
	  {
		   echo ("<script language='javascript'>window.alert('Failed!!Try Again...')
		   window.location.href='add_item_category.php';</script>");
	  }
	  }
  ?>