<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<?php
$kid =$_GET['uid'];
$_SESSION['Item_id']=$kid;
$select_details = "SELECT * FROM `tbl_items` WHERE `Item_id` = '$kid'";
$result = mysqli_query($con , $select_details);
while($row =mysqli_fetch_array($result))
{
?>
<form method="post" action="item_edit_action.php" enctype="multipart/form-data">
<div><br><font color="green"><h1><b>EDIT ITEM</b></font></h1><br><br>
<table>
<tr><td><img src="Uploads/<?php echo $row['Item_image'];?>" alt="" height="160" width="160" style="padding-right: 418px; margin-bottom: 6px; padding-left: 7px; margin-top: -13px;"></td></tr>
<tr><td>Item Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="itemname" value="<?php echo $row['Item_name'];?>" /></tr></td>
            <tr><td>Brand Name: &nbsp&nbsp&nbsp&nbsp
          <select name="brandname">
		  <option>--Select--</option>
		  <?php
		  include 'dbconnect.php';
		  $res=mysqli_query($con,"SELECT * FROM `tbl_brand`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['Brand_id'];?>>	  <?php echo $row1['Brand_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></tr></td>
                
				 <tr><td>Item Price:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="price" value="<?php echo $row['Item_price'];?>" /></tr></td>
				 <tr><td>Item Image:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="file" name="Image" value="<?php echo $row['Item_image'];?>" /></tr></td>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input  type="submit" name="submit" value="Save"/></tr></td>
				
    		</form>
			
<?php
}
if(isset($_POST['submit']))
{
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
}
?>
