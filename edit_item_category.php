<?php
include 'dbconnect.php';
include 'admin_header.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"select * from `tbl_item_category` where `Item_Cat_id`='$kid'");
$row=mysqli_fetch_array($res);
 ?>
<html>
<head><br><br>
<h1><font color="green">EDIT ITEM CATEGORIES</h1><br></font>
</head>
<form name="edit_itemcategory.php" action="#" method="post" >
<body>
      <table>
		  <tr>
          <td><b>Category Name</b></td>
          <td><input type="text" name="item_category_name" id="category_name" value="<?php echo $row['Item_Cat_name'];?>"></td>
          </tr>
		  <tr>
          <td><b>Description</b></td>
          <td><input type="text" name="description" id="category_price" value="<?php echo $row['Description'];?>"></td>
          </tr>
		  <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
          </tr>
		  </table>
		  </body>
		  </form>
		  </html>
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