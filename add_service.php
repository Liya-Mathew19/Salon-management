<?php
  include 'dbconnect.php';
include 'admin_header.php';
?>
<html>
<script type="text/javascript">
function validate()
{
	
 var  dvar1 = document.getElementById("txt_service_name");
if(dvar1.value=="")
{
 alert("Enter Service name...");
dvar1.focus();
return false;
}
else		
          {      
          var expn2=/^[a-zA-Z\s]+$/;                          
          if(dvar1.value.match(expn2))	     
               {                          
            }                  
              else       
             {                
     alert("Enter a valid service name"); 
	 dvar1.focus();                    
             return false;        
     }
}
}
</script>
<head><br><br>
<h1><font color="green">ADD SERVICES</font></h1><br>
</head>
<form name="add_service.php" action="service_action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
<body>
      <table>
          <tr>
          <td><b>Service Name:</b></td>
          <td><input type="text" name="txt_service_name" id="txt_service_name" placeholder="Enter service name..." value="" required></td>
          </tr>
		  <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
          </tr>
		  </table>
		  </body>
		  </form>
		  </html>
		 <a href="view_service.php">View Service</a>
		 