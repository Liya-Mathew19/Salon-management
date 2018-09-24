 <?php
 include 'dbconnect.php';
	  $item_name=$_POST['itemname'];
	  $brand_name=$_POST['brandname'];
	  $category=$_POST['category'];
	  $price=$_POST['price'];
	  $stock=$_POST['stock'];
	  $img=$_FILES['image']['name'];
	  move_uploaded_file($_FILES["image"]["tmp_name"],"Uploads/".$_FILES["image"]["name"]);
	  $sql=mysqli_query($con,"INSERT INTO `tbl_items`(`Item_name`, `Brand_id`, `Item_Cat_id`, `Item_price`, `Item_stock`, `Item_image`,`status`)
	  VALUES ('$item_name','$brand_name','$category','$price','$stock','$img','1')");
	   if($sql)
	  {
		   echo ("<script language='javascript'>window.alert('Item Added Successfully!!')
		   window.location.href='add_item.php';</script>");
	  }
	  else
	  {
		   echo ("<script language='javascript'>window.alert('Failed!!Try Again...')
		   window.location.href='add_item.php';</script>");
	  }
	 
  ?>