<?php
include 'customer_header.php';
?>


<script type="text/javascript">
function validate()
{
var pas1=document.getElementById("txtnewpwd");
							  var pas2=document.getElementById("txtconfirmpwd");
							
							  if(pas1.value=="")
	{
		alert("Password cant be null!!");
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		alert("Please confirm password!!");
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		alert("Passwords does not match!!");
		pas1.focus();
		return false;
	}
	
        {  alert("Request Send!!"); }
      
	
	
}
</script>
<?php
error_reporting(0);
//session_start();
$uname=$_SESSION['username'];
 ?>

 
                                 <form action="customer_password_action.php" method="post" onsubmit="return validate()">
								
                                       <br><br>
									   <div align="center">
									         <?php
                                     if($_GET['s']==1)
                                     {
                                         echo "<script>alert('Password Has Changed!!')</script>";
                                     }
                                     else if($_GET['s']==2)
                                     {
                                        echo "<script>alert('The Password could not be changed due to some internal errors!!')</script>";
                                     }
                                     ?>
									<!-- <br><br><br><br><br><br><br><br>
                                    <div align="center" > 
                                   <fieldset style="width:35%">
									<legend>Change password</legend>-->
									<h1><font color="green">CHANGE PASSWORD</h1></font><br>
                                      <table class="tb">
<tr>
<td></td>
</tr>
		<tr>
                                             <td><b>Old Password</b></td><td><input type="password" name="old" id="txtoldpwd"/></td>
                                         </tr>
                                           <tr>
                                             <td><b>New Password</b></td><td><input type="password" name="new" id="txtnewpwd" onchange="Validp();"/></td>
                                         </tr>
										 <script>		
function Validp() 
{
    var val = document.getElementById('txtnewpwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,8}$/)) 
    {
        alert('Password should contain atleast a character and a Number with length atleast 6 and atmost 8');
		
		     document.getElementById('txtnewpwd').value = "";
        return false;
    }

    return true;
}

</script>
                                          <tr>
                                             <td><b>Confirm Password</b></td><td><input type="password" name="confirm" id="txtconfirmpwd" onchange="check();"/></td>
                                         </tr>
										 <script>
	function check(){
			if(document.getElementById("txtconfirmpwd").value!=document.getElementById("txtnewpwd").value)
			{
				document.getElementById("message").style.color='red';
				document.getElementById("message");
				alert('Passwords does not Match');
				
		            document.getElementById('txtconfirmpwd').value = "";
            }
		else{
			document.getElementById("message").style.color='green';
			document.getElementById("message");
			alert('Passwords Match');}
			}
	</script>
                                         <tr>
                                             <td></td><td><input type="submit" name="changepwd" id="txtchangepwd" value="Change"/></td>
                                         		</tr>
		<tr>
<td></td>
</tr>
</table>


</div>
</form>
</body>
                   
   <div class="clear"></div>
     </div>
    </div>
  </div>
<div class="copy_right">
				<p>Company Name © All rights Reseverd | Design by  <a href="http://w3layouts.com"> LIYA MATHEW</a></p>
		 </div>
</body>
</html>
</html>
