<?php
   session_start();
include 'dbconnect.php';
    $uname=$_SESSION['username'];
    $old=$_POST['old'];
    $new=$_POST['new'];
	$n=md5($new);
    $confirm=$_POST['confirm'];
     $query_sel="select * from tbl_login where Username='$uname' and Password='$old'";
    $res_sel=mysqli_query($con,$query_sel);
    echo $num=mysqli_num_rows($res_sel);
    if($num!=0 && $new==$confirm)
    {
    echo $query="update tbl_login set Password='$n' where Username='$uname'";
    $res=mysqli_query($con,$query);
    header("Location:change_password.php?s=1");
    
    }
	else
	{

	  header("Location:change_password.php?s=2");
	}
    
?>

