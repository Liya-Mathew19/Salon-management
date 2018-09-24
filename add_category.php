<?php
  include 'dbconnect.php';
include 'admin_header.php';
?>
<html>
<script type="text/javascript">
function validate()
{
	
 var  dvar1 = document.getElementById("category_name");
if(dvar1.value=="")
{
 alert("Enter Category name...");
dvar1.focus();
return false;
}
else		
          {      
          var expn2=/^[a-zA-Z\s]+$/;                          
          if(dvar1.value.match(expn2))	     
               {                          
            }                  
              else       
             {                
     alert("Enter a valid category name"); 
	 dvar1.focus();                    
             return false;        
     }
}
}
</script>
<head><br><br>
<h1><font color="green">ADD CATEGORIES</font></h1><br>
</head>
<form name="add_service.php" action="category_action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
<body>
      <table>
          <tr>
          <td><b>Service Name</b></td>
          <td><select  name="service_name"  id="service_name">
          <option>--Select--</option>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_service_category`");
		  $r=mysqli_num_rows($res);
		  while($row=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row['Cat_id'];?>>	  <?php echo $row['Cat_name'];?></option>
		  <?php
		  }
		  ?>
          </select>
          </td>
          </tr>
		 
          </select>
          </td>
          </tr>
		  <tr>
          <td><b>Category Name</b></td>
          <td><input type="text" name="category_name" id="category_name" value="" placeholder="Enter category name..." required></td>
          </tr>
		  <tr>
          <td><b>Price</b></td>
          <td><input type="number" name="category_price" id="category_price" value="" placeholder="Enter category price..."required></td>
          </tr>
		  <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
          </tr>
		  </table>
		  </body>
		  </form>
		  </html>
		 <a href="view_category.php">View Category</a>
		 
		 