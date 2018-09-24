<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<h1>LEAVE VIEW</h1>
<table>
          <td><font size=5>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_leave` where `Status`='Requested'");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  {  
	  $kid=$row['Reg_id'];
	  $res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Reg_id`='$kid'");
		  $r1=mysqli_num_rows($res1);
		  $row1=mysqli_fetch_array($res1);
	  
	  echo $i. ". ";
		  ?>
		  
		 <a href= "leave_approve.php?uid=<?php echo $row['Reg_id'];?>"<?php echo $row['Reg_id'];?>>	  <?php echo $row1['F_name']; ?></a><br>
		  <?php
		  $i++;
		  }
		  ?></a>
		  </td>
          </tr></table>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>