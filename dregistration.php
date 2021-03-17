<?php
//id, pname, paddress, page, pproblem, pcontact, pgender, pemail, preg_date
session_start();
include_once 'configs.php';

if(isset($_POST['submit']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$age = mysql_real_escape_string($_POST['age']);
	$address = (mysql_real_escape_string($_POST['address']));
	$gender = (mysql_real_escape_string($_POST['gender']));
	$specilist = (mysql_real_escape_string($_POST['specilist']));
	$email = (mysql_real_escape_string($_POST['email']));
	$date = (mysql_real_escape_string($_POST['date']));
	$contact = (mysql_real_escape_string($_POST['contact']));
	$qualification = (mysql_real_escape_string($_POST['qualification']));
	
	if(mysql_query("INSERT INTO d_registration (name,age,address,gender,specilist,email,date,contact,qualification) VALUES('$name','$age','$address','$gender','$specilist','$email','$date','$contact','$qualification')"))
	if(mysql_query("insert into doctor(name,specilist)
	Values('$name','$specilist')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/dreg.css">
<table width="100%" border="" align="center" background="images/templatemo_menu.png">
  <tr>
    <td style="font-size:36px;" align="center"><a href="dregistration.php" target="_self">Doctor Registration</a></td>
    <td style="font-size:36px;" align="center"><a href="employee.php" target="_self">Employee Registration</a></td>
    <td style="font-size:36px;" align="center"><a href="home.php" target="_self">Logout</a></td>
  </tr>
</table>
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
	 
	var a = document.getElementById("age");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("address");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("gender");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("specilist");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("email");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("date");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("contact");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("qualification");
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
<body>
<form method="post" onsubmit="return form();">
<table width="50%" height="56" border="3" align="center" style="margin-top:-80px;" bordercolor="#FF33CC">
<tr>
<div class="ab" align="center">
<td><table width="100%" border="0"></td>
  <tr>
    <th height="50" style="font-size:24px" align="right">Name&nbsp;&nbsp;</th>
    <td><input type="text" name="name"  value="" placeholder="Enter you name" id="name" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Age&nbsp;&nbsp;</th>
    <td><input type="number" name="age" value="" placeholder="Enter you age" id="age" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Address&nbsp;&nbsp;</td>
    <td><input type="text" name="address" value="" placeholder="Enter your address" id="address" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Gender&nbsp;&nbsp;</th>
    <td> <select name="gender" class="abc" id="gender">
                         <option selected="gender" value="please select............">please select................</option>
                         <option value="MALE">MALE</option>
                           <option value="FEMALE">FEMALE</option>
                           </select></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Specilist&nbsp;&nbsp;</th>
    <td align="left"><input type="text" name="specilist" value="" placeholder="" id="specilist" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Email&nbsp;&nbsp;</th>
    <td align="left"><input type="email"  name="email" class="abcd" id="email" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Date&nbsp;&nbsp;</th>
    <th align="left"><input type="date"  name="date" class="abcd" id="date" /></th>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Contact&nbsp;&nbsp;</th>
    <td><input type="number" name="contact" value="" placeholder="Enter you address" id="contact" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Qualification&nbsp;&nbsp;</th>
    <td align="left"><input type="text"  name="qualification" class="abcd" id="qualification" /></td>
  </tr>
  <tr>
    <td height="50" colspan="2" style="font-size:24px" align="center"><input type="submit" value="Submit" name="submit" class="abcde" /></td>
    </tr>
</table>
</div>
</tr>
</table>

</form>
 <footer style="background:url(css/templatemo_slider.png); margin-top:0px;">	

	 <div style="width:100%; height:60px; ">
	</footer>
</body>
</html>