<?php
  include 'dbconnect.php';
include 'admin_header.php';
?>
<html>
<head>
<h1> <font color="green">    STAFF REGISTRATION</h1></font><br>
</head>
<form name="staff_add.php" action="staff_action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
<body>
      <table>
          <tr>
          <td><b>First_name</b></td>
          <td><input type="text" name="txt_staff_FName" id="txt_staff_FName" value="" required onchange='Validate();'></td>
          </tr>
		   <script>		
function Validate() 
{
    var val = document.getElementById('txt_staff_FName').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('txt_staff_FName').value = "";
        return false;
    }

    return true;
}
</script>
          <tr>
          <td><b>Last_name</b></td>
          <td><input type="text" name="txt_staff_LName" id="txt_staff_LName" value="" required onchange='Validatew();'></td>
          </tr>
		  <script>		
function Validatew() 
{
    var val = document.getElementById('txt_staff_LName').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('txt_staff_LName').value = "";
        return false;
    }

    return true;
}
</script>
		  <tr>
          <td><b>Gender:</b></td>
          <td><input type="radio" name="txt_staff_Gender" id="txt_staff_Gender" value="Male"required>Male
		  <input type="radio" name="txt_staff_Gender" id="txt_staff_Gender" value="Female"required>Female</td>
          </tr>
		  <td></td>
          <tr>
          <td><b>House_Name</b></td>
          <td><input type="text" name="txt_Housename" id="txt_Housename" value="" required onchange='Validname();'></td>
          </tr>
		  <script>		
function Validname() 
{
    var val = document.getElementById('txt_Housename').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('txt_Housename').value = "";
        return false;
    }

    return true;
}
</script>
		  <tr>
          <td><b>District</b></td>
          <td><select name="txt_District">
		  <option>--Select--</option>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_district`");
		  $r=mysqli_num_rows($res);
		  while($row=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row['Dis_id'];?>>	  <?php echo $row['Dis_name']; ?></option>
		  <?php
		  }
		  ?>
		  </select></td>
          </tr>
		  <tr>
          <td><b>City</b></td>
          <td><input type="text" name="txt_City" id="txt_City" value="" required onclick='Validcity();'></td>
          </tr>
		  <script>		
function Validcity() 
{
    var val = document.getElementById('"txt_City').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('"txt_City').value = "";
        return false;
    }

    return true;
}
</script>
          <tr>
          <td><b>Mobile</b></td>
          <td><input type="text" name="txt_Mobile" id="txt_Mobile" value="" required onchange='Validat();'></td>
          </tr>
		  <script>		
function Validat() 
{
    var val = document.getElementById('Mobile').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        alert('Only Numbers are allowed and must contain 10 number');
	
		
		            document.getElementById('Mobile').value = "";
        return false;
    }

    return true;
}
</script>
		  <tr>
          <td><b>Email</b></td>
          <td><input type="email" name="txt_Email" id="txt_Email" value="" required onchange='Validata();'></td>
          </tr>
		  <script>		
function Validata() 
{
    var val = document.getElementById('txt_Email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Enter a Valid Email');
		
		     document.getElementById('txt_Email').value = "";
        return false;
    }

    return true;
}

</script>
		  <td><b>Qualification</b></td><td>
		  <select name="qualification" size="1">
		  <option>--Select--</option>
		  <option value="UG">UG</option>
		  <option value="PG">PG</option>
		  </select></td></tr>
		  <tr>
          <td><b>Specialization</b></td>
          <td><select name="txt_specialization">
		  <option>--Select--</option>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_service_category`");
		  $r=mysqli_num_rows($res);
		  while($row=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row['Cat_id'];?>>	  <?php echo $row['Cat_name']; ?></option>
		  <?php
		  }
		  ?>
		  <tr> <td><b>University/College</b></td>
          <td><input type="text" name="txt_university" id="txt_university" value="" required></td>
		  <tr>
		  <td><b>Year Of Pass</b></td>
          <td><input type="year" name="txt_year" id="txt_year" value="" required></td>
		  <tr>
		  <tr>
          <td><b>Experience</b></td>
          <td><input type="text" name="txt_experience" id="txt_experience" value="" required></td>
		  <tr>
		  <tr>
          <td><b>Password</b></td>
          <td><input type="password" name="txt_Pwd" id="txt_Pwd" value="" placeholder="Enter Password..."required onchange='Validp();'></td>
          </tr>
		         <tr>
             <tr>
			 </span>
<script>		
function Validp() 
{
    var val = document.getElementById('txt_Pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,8}$/)) 
    {
        alert('Password should contain atleast a character and a Number with length atleast 6 and atmost 8');
		
		     document.getElementById('txt_Pwd').value = "";
        return false;
    }

    return true;
}

</script>
<span>
          <td><b>Confirm Password</b></td>
          <td><input type="password" name="txt_cPwd" id="txt_cPwd" value="" placeholder="Retype Password.."required onchange='check();'></td>
          </tr>
		         <tr>
		           <tr>
				   <span id="message" ></span></span>
<script>
	function check(){
			if(document.getElementById("txt_cPwd").value!=document.getElementById("txt_Pwd").value)
			{
				document.getElementById("message").style.color='red';
				document.getElementById("message");
				alert('Passwords does not Match');
				
		            document.getElementById('txt_cPwd').value = "";
            }
		else{
			document.getElementById("message").style.color='green';
			document.getElementById("message");
			}
			}
	</script>
          <td><b>Image</b></td>
          <td><input type="file" name="txt_Image" id="txt_Image"  placeholder="pic path" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required="required"  onChange="load_image(this.id,this.value)"></td>
          </tr>
          <td></td>
		  <script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("txt_Image").value = "";
	  document.getElementById("file").focus();
	  
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script>
          <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
          </tr>
</table>
</body>
</html>
