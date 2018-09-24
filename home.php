<?php
include "aheader.php";
?>






Welcome <?php echo $_SESSION['username']; ?><br/>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
if($id==2)
{
echo "Payment Success!!! Please Check your mail for time!!!";
}
elseif($id==3)
{
    echo "Payment Success!!! Your Order will be placed!!!";
}

}
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php

include "footer.php";

?>