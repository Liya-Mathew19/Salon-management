 <?php
 include 'dbconnect.php';
		  if(isset($_POST['cmd']))
  {
	  $service_name=$_POST['txt_service_name'];
	  $sel1="select * from `tbl_service_category` where `Cat_name`='$service_name'";
	  $qry1=mysqli_query($con,$sel1);
	  $num=mysqli_num_rows($qry1);
	  if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Already added this service !!')
		   window.location.href='add_service.php';</script>");
	  }
	  else
	  {
	  $sql=mysqli_query($con,"INSERT INTO `tbl_service_category`(`Cat_name`, `Status`) VALUES ('$service_name',1)");
	  if($sql)
	  {
		   echo ("<script language='javascript'>window.alert('Service Added Successfully!!')
		   window.location.href='add_service.php';</script>");
	  }
	  else
	  {
		   echo ("<script language='javascript'>window.alert('Service Adding Failed!!Try Again..')
		   window.location.href='add_service.php';</script>");
	  }
	  }
  }
  ?>