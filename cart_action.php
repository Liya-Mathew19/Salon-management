<?php
include 'dbconnect.php';
session_start();
$sel="select * from tbl_registration where `Reg_id`='$_SESSION[Reg_id]'";
$qry=mysqli_query($con,$sel);
$ans=mysqli_fetch_array($qry);
$x=$ans['Reg_id'];
$i=$_POST['item'];
$sel1="select Item_id from tbl_items Where Item_name='$i'";
$res=mysqli_query($con,$sel1);
$row=mysqli_fetch_array($res);
$item=$row['Item_id'];
$date=$_POST['txt_purchase_date'];
$qty=$_POST['txt_qty'];
$total=$_POST['txt_total'];
$sql=mysqli_query($con,"INSERT INTO `tbl_purchase`(`Reg_id`, `Item_id`,`Date`, `Quantity`, `Total`, `Status`) 
VALUES ('$x','$item','$date','$qty','$total','1')");
header("location:cart_view.php?uid=$_SESSION[Reg_id]");
?>
