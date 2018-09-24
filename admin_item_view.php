<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<html>
<form name="view_service.php" action="#" method="post" >
<head><center><br><br>
<h1><font color="green">ITEM CATEGORIES</font></h1><br>
<td><b>Select Category</b></td>
          <td><select name="categories">
		  <option>--Select--</option>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_item_category`");
		  $r=mysqli_num_rows($res);
		  while($row=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row['Item_Cat_id'];?>>	  <?php echo $row['Item_Cat_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></td>
		
          </tr><br>
		  <tr><td><input type="submit" name="submit" value="View" ></tr></td>

<br><br>
<a href="add_item_category.php">Add New Category</a>
<?php
		if(isset($_POST['submit']))
		{
			$a=$_POST['categories'];
			$_SESSION['categories']=$a;
			header('location:view_itemcategory_action.php');
		}?>
		 