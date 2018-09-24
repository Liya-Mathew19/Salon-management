<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<h1>APPOINTMENT REQUESTS</h1>
<table>
          <td><font size=5>
		  <?php
		  $x=$_SESSION['Reg_id'];
		  $res=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Status`='1'");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  {  
	  $kid=$row['Reg_no'];
	  $res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Reg_id`='$kid'");
		  $r1=mysqli_num_rows($res1);
		  $row1=mysqli_fetch_array($res1);
	  
	  echo $i. ". ";
		  ?>
		  
		 <a href= "admin_app_aprove.php?uid=<?php echo $row['Reg_no'];?>"<?php echo $row['Reg_no'];?>>	  <?php echo $row1['F_name']; ?> <?php echo $row1['L_name']; ?></a><br>
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