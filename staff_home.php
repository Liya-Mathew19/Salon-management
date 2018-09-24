<?php
include 'staff_header.php';
?>
<h1><center><font color="green">STAFF PROFILE</h1></font></fieldset>
<?php
include 'dbconnect.php';

$kid =$_GET['uid'];
$sel = mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id` = '$kid'");
$row =mysqli_fetch_array($sel);
$a=$row['Dis_id'];
$sel1 = mysqli_query($con,"SELECT * FROM `tbl_district` where `Dis_id`='$a'");
$row1 =mysqli_fetch_array($sel1);
$sel2 = mysqli_query($con,"SELECT * FROM `tbl_staff` where `Reg_id`='$kid'");
$row3=mysqli_fetch_array($sel2);
$result4=mysqli_query($con,"select Cat_name from tbl_service_category");
$row4=mysqli_fetch_array($result4);
?><center>
<table><font size="4">
<img src="Uploads/<?php echo $row['Image'];?>" alt="" height="300" width="250" style="padding-right: 418px; margin-bottom: -330px; padding-left: 500px; margin-top: -173px;">
<tr><td><b>NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['F_name'];?>&nbsp <?php echo $row['L_name'];?></b></td></tr>
<tr><td><b>GENDER:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Gender'];?></b></td></tr>
<tr><td><b>HOUSE NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['House_name'];?></b></td></tr>
<tr><td><b>CITY:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['City'];?></b></td></tr>
<tr><td><b>DISTRICT:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row1['Dis_name'];?></b></td></tr>
<tr><td><b>PHONE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Mobile'];?></b></td></tr>
<tr><td><b>EMAIL:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Email'];?></b></td></tr>
<tr><td><b>QUALIFICATION:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row3['Qualification'];?></b></td></tr>
<tr><td><b>SPECIALIZATION:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row4['Cat_name'];?></b></td></tr>
</font></div></table>
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
	<?php
	include 'footer.php';
	
	?>