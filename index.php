<?php
//user_id, username, password
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("ravi",$conn);
$result = mysql_query("SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_id"] = $row[user_id];
$_SESSION["username"] = $row[username];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/ravi2.css" />
<script type="text/javascript">
function form()
{
	 
	var a = document.getElementById("name");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	 
	var a = document.getElementById("password");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
}
</script>

</head>

<body style="margin-top:o" background="images/bg.png">
<form method="post" onsubmit="return form();">
<table width="80%" border="2" align="center">
<tr>
<td><table width="70%" border="0" align="center" style="height:60px;"></td>
  <tr>
    <th scope="col" align="left" style="font-size:24px;"><a href="ravi.php" target="_self">Home</a></th>
    <th scope="col" align="right" style="font-size:24px;"><a href="contant.php" target="_self">Contact Us</a></th>
    <th scope="col" align="right">Registration</th>
  </tr>
</table>
</tr>
</table>
<table width="80%" border="1" align="center" height="300%">
  <tr>
    <th><img src="images/hospital.png" width="1030" height="430" /></th>
  </tr>
</table>
<table width="80%" border="1" align="center">
  <tr>
    <th width="51%" height="282" scope="col"><img src="images/admin.png"  width="256" height="256" />
    <th width="49%" height="282"  background="css/TEXTURE1.GIF"><table width="100%" border="0" align="center" style="margin-top:10px" cellspacing="20px;">
  <tr>
   <p align="center"><?php if($message!="") { echo $message; } ?></p>
    <th height="38" colspan="2" scope="col" style="font-size:36px">Login</th></div>
    </tr>
  <tr>
    <td  align="right" style="font-size:30px">Username</td>
    <td><input type="text" name="username" placeholder="Enter your name"  id="name"/></td>
  </tr>
  <tr>
    <td height="65" align="right" style="font-size:30px">Password</td>
    <td><input type="password" name="password" placeholder="Enter your password"  id="password"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div class="login"><input type="submit" value="login" /></div></td>
    </tr>
</table>
</th>
  </tr>
</table>



</form>
<footer style="background-color:#000; margin-top:20px;">	
		
        
       
          
	 <div style="width:100%; height:60px; ">
         
         <div style="float:left; margin-left:200px; color:#FFF; margin-top:12px;">Copyright © 2020 Hospital Management System. All Rights Reserved.</div>
        
        </div>    
			    
	</footer>
</body>
</html>