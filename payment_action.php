 <?php
 include 'dbconnect.php';
 session_start();
$resl=mysqli_query($con,"UPDATE `tbl_purchase` SET `Status`='0' WHERE `Reg_id`='$_SESSION[Reg_id]'");
echo ("<script language='javascript'>window.alert('Your Order Has Been Placed Successfully!!')
		   window.location.href='purchase_payment.php?uid=$_SESSION[Reg_id]'</script>");
		   ?>
