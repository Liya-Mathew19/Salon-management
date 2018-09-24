<?php
include 'customer_header.php';
?>
<h1><font color="green">USER PROFILE</h1></font></fieldset>
<?php

$kid =$_GET['uid'];
$sel = "SELECT * FROM `tbl_registration` WHERE `Reg_id` = '$kid'";
$result = mysqli_query($con , $sel);
$row =mysqli_fetch_array($result);
$d=$row['Dis_id'];
$sel1 = "SELECT * FROM `tbl_district` where `Dis_id`='$d'";
$result1 = mysqli_query($con , $sel1);
$row1 =mysqli_fetch_array($result1);
?>

<div><table><font size="4">
<img src="Uploads/<?php echo $row['Image'];?>" alt="" height="300" width="250" style="padding-right: 418px; margin-bottom: -252px; padding-left: 500px; margin-top: -173px;">
<tr><td><b>NAME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['F_name'];?>&nbsp<?php echo $row['L_name'];?></b></td></tr>
<tr><td><b>GENDER &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Gender'];?></b></td></tr>
<tr><td><b>HOUSE NAME &nbsp<?php echo $row['House_name'];?></b></td></tr>
<tr><td><b>CITY &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['City'];?></b></td></tr>
<tr><td><b>DISTRICT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row1['Dis_name'];?></b></td></tr>
<tr><td><b>PHONE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Mobile'];?></b></td></tr>
<tr><td><b>EMAIL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Email'];?></b></td></tr></font></div>
</table>
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
    background-color: #6ea522;
    color: white;
}
</style>