<?php
include 'admin_header.php';
?>
<html>
<head><br><br>
<h1><font color="green">ADD ITEM CATEGORY</font></h1><br>
</head>
<form name="add_service.php" action="item_category_action.php" method="post" enctype="multipart/form-data">
<body>
      <table>
          <tr>
          <td>Category Name:</td>
          <td><input type="text" name="txt_category_name" id="txt_cat_name" value="" placeholder="Enter category name..." required></td>
          </tr>
		  <tr>
          <td>Category Description:</td>
		  <td><textarea name="txt_category_desc" id="txt_cat_desc" placeholder="Enter category description..." required></textarea></td></tr>
          <tr><td><input type="submit" name="cmd" id="cmd" value="Save"></td></tr>
		  <tr><td><a href="view_item_category.php">View Categories</a></td></tr>
		  </body>
		  </form>
		  </html>
		 
		 