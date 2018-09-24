<?php
include 'staff_header.php';
?>
<?php
$kid =$_GET['uid'];
$_SESSION['Feed_id']=$kid;
$select_details = "SELECT * FROM `tbl_feedback` WHERE `Feed_id` = '$kid'";
$result = mysqli_query($con , $select_details);
$row =mysqli_fetch_array($result);
?>
<div><br><center><font color="green"><h1><b>EDIT FEEDBACK</b></font></h1><br><br>
<body>
<form action="stafffeed_edit_action.php" method="post">
<table><font size="4"><tr>
<tr><td><b>Feedback message: <input type="text" name="feed" value="<?php echo $row['Feed_msg'];?>"></b></td></tr>
<tr>
<tr><td><input type="submit" name="submit" value="UPDATE"/></td></tr>
</table></div>
</form>
</body>
</html>

