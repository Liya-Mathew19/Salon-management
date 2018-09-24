
<?php
 include 'header2.php';
  include 'dbcon.php';
  date_default_timezone_set('asia/kolkata'); 
session_start();
$i=$_SESSION['i'];
if(!isset($_SESSION['u']))
{
	header("Location:../web/index.php");
}
else
{
	?>

<html>
<body bgcolor="grey"><center><br><br>
<h1 style="font-size:52px">Which Doctor you want to see</h1>
</body>
<br><br> <u><a href ="hview1.php">View Appointments </a></u>
&nbsp;&nbsp;&nbsp; <u><a href ="sh1.php">Search Doctor </a></u><br><br><br>
<form action ="#" method="post"enctype="multipart/form-data" >
Type:<select name="n" required >
            <?php

$results=mysqli_query($conn,"select * from hos2");
while($row=mysqli_fetch_array($results))
{
?>

              <option><?php echo $row['type'];?></option>
        <?php
}?>
            </select><br>
 <br>
   Date:<input type="date" name="m" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>" required>
   Time:<input type="time" name="t" required>
          
<input type="submit" name="sub" value="Show"/><br><br>
</form>

<?php
include 'dbcon.php';
if(isset($_POST["sub"]))
{
	$n=$_POST['n'];
	$m=$_POST['m'];
	$t=$_POST['t'];
	
$at="10:00";
$bt="16:30";

	$ct=date("H:i");
	$cd=date("Y-m-d");
if(($t>=$at)&&($t<=$bt))
{if((($m==$cd)&&($t>$ct))||($m!=$cd))
{		


$results=mysqli_query($conn,"select * from hos where type='$n' ");
$i=1;

while($row=mysqli_fetch_array($results))
{	
$u=$row['id'];
$resu=mysqli_query($conn,"select * from hos1 where vid='$u' ");
$rw=mysqli_fetch_array($resu);
$da=$rw['date'];
$ti=$rw['time'];


$a1=strtotime("-15 minutes",strtotime($ti));
$a2=date("H:i",$a1);
$b1=strtotime("+15 minutes",strtotime($ti));
$b2=date("H:i",$b1);

if(($m==$da)&&($t>$ct))
{

if(($t<=$a2)||($t>=$b2))
	{
?>

	<tr>
		<td><?php echo $i;$i++;?></td>
		<td><?php echo $row['name'];?></td>
		
		<td><?php echo $row['price'];?></td>
		
		
		
		<td><img src="uploads/<?php echo $row['image'];?>"height="120"width="150"/></img></td>
			<td> <a href ="hbook.php?uid=<?php echo $row['id'];?>&t=<?php echo $t;?>&m=<?php echo $m;?>">Get Appointment </a></td>
	
	</tr>
<?php
}}else if($m!=$da)
{?>

	<tr>
		<td><?php echo $i;$i++;?></td>
		<td><?php echo $row['name'];?></td>
		
		<td><?php echo $row['price'];?></td>
		
		
		
		<td><img src="uploads/<?php echo $row['image'];?>"height="120"width="150"/></img></td>
			<td> <a href ="hbook.php?uid=<?php echo $row['id'];?>&t=<?php echo $t;?>&m=<?php echo $m;?>">Get Appointment </a></td>
	
	</tr>
<?php	

}}	}else
{
	?>
<center><h2>Sorry,Invalid Time!!</h2>
<?php }
if($i==1)
{
	?>
<center><h2>Sorry, No Doctor is available for this Time period!!</h2>
<?php }

?>
</table><br><br>
 <?php
}else
{ 	?>
<center><h2>Sorry, Appointment time is from 10:00am - 4:30pm!!</h2>
<?php }}}
?>
<?php	
include 'footer.php';
?>
</html>


