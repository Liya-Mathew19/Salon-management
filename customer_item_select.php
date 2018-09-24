<?php
include 'customer_header.php';
?>
<html>
<form  action="#" method="post" >
<head><br><br>
<h1><font color="green"><center>ITEM CATEGORIES</font></h1><br>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_item_category`");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Items Added Yet !!!</font></center>";
}
else
{
?>
<td>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_item_category`");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  {  
	  echo "<font size=5><br>".$i. ".";
		  ?>
		  <a href="customer_view_item.php?uid=<?php echo $row['Item_Cat_id'];?>" >	  <?php echo $row['Item_Cat_name']; ?></a>
		  <br><?php
		  $i++;
}}
		  ?>
		</select></td>
		
          </tr><br>
		  
		  </form>
		  </html>

		
		