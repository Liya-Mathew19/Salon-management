<?php
include 'admin_header.php';
?>
				
				<h1><font color="green">ADD ITEMS</h1></font>
        	<form action="add_item_action.php" method="post" enctype="multipart/form-data"><table>
			<tr><td>Item Name: &nbsp &nbsp &nbsp <input type="text" name="itemname" placeholder="Enter the Item name here..." required/></tr></td>
            <tr><td>Brand Name:&nbsp &nbsp  
          <select name="brandname">
		  <option>--Select--</option>
		  <?php
		  include 'dbconnect.php';
		  $res=mysqli_query($con,"SELECT * FROM `tbl_brand`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['Brand_id'];?> required>	  <?php echo $row1['Brand_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></tr></td>
                <tr><td>Item Category:&nbsp 
          <select name="category">
		  <option>--Select--</option>
		  <?php
		  include 'dbconnect.php';
		  $res=mysqli_query($con,"SELECT * FROM `tbl_item_category`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['Item_Cat_id'];?> required>	  <?php echo $row1['Item_Cat_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></tr></td>
				 <tr><td>Item Price:  &nbsp &nbsp &nbsp  &nbsp <input type="number" name="price" placeholder="Enter the item price here..." required/></tr></td>
				 <tr><td>Available Stock: <input type="number" name="stock" placeholder="Enter the stock here..." required/></tr></td>
				<tr><td> Item Image:  &nbsp &nbsp &nbsp <input type="file" name="image" placeholder="Enter the Brand name here..." required/></tr></td>
				<tr><td>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp <input  type="submit" name="Save" value="Save"/></tr></td>
				
    		</form>
   <tr><td><a href="admin_item_view.php">View Items</a></tr></td>
    </ul>
	
    </div>
	
    </div>
	
</body>
</html>
