<?php
//id, pname, paddress, page, pproblem, pcontact, pgender, pemail, preg_date
session_start();
include_once 'configs.php';
include_once 'function.php';
if(isset($_POST['submit']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$age = mysql_real_escape_string($_POST['age']);
	$problem = (mysql_real_escape_string($_POST['problem']));
	$gender = (mysql_real_escape_string($_POST['gender']));
	$doctor = (mysql_real_escape_string($_POST['doctor']));
	$room = (mysql_real_escape_string($_POST['room']));
	$date = (mysql_real_escape_string($_POST['date']));
	$address = (mysql_real_escape_string($_POST['address']));
	
	
	if(mysql_query("INSERT INTO p_registration(name,age,problem,gender,doctor,room,date,address) VALUES('$name','$age','$problem','$gender','$doctor','$room','$date','$address')"))
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
<link rel="stylesheet" href="css/preg.css" />
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
	var a = document.getElementById("problem");
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
	var a = document.getElementById("doctor");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
	var a = document.getElementById("room");
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
	var a = document.getElementById("address");
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
<div class="tab">
<table width="30%" border="0"  align="center" >
  <tr>
    <td style="font-size:36px;">Registration</td>
    <td style="font-size:36px;"><a href="home.php" target="_self">Logout</a></td>
  </tr>
</table>
</div>
<table width="50%" height="56" border="3" align="center" style="margin-top:50px;" bordercolor="#FF33CC">
<tr>
<div class="ab" align="center">
<td><table width="100%" border="0"></td>
  <tr>
    <th height="50" style="font-size:24px" align="right">Name&nbsp;&nbsp;</th>
    <td><input name="name"  type="text" id="name"   /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Age&nbsp;&nbsp;</th>
    <td><input type="number"  id="age" name="age"  /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Problem&nbsp;&nbsp;</td>
    <td><input type="text" name="problem" id="problem"  /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Gender&nbsp;&nbsp;</th>
    <td> <select name="gender" class="abc" id="gender">
                         <option selected="gender"  id="gender" value="please select............">please select................</option>
                         <option value="MALE">MALE</option>
                           <option value="FEMALE">FEMALE</option>
                           </select></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Reffred by doctor&nbsp;&nbsp;</th>
    <td><select name="doctor" class="bc" id="doctor"> <?php echo get_option_list("doctor","id","name");?></select></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Room No.&nbsp;&nbsp;</th>
    <td><select name="room" class="abc" id="room"><?php echo get_option_list("doctor","id","room");?>
   </select></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Date&nbsp;&nbsp;</th>
    <th align="left"><input type="date" id="date"  name="date" class="abcd" /></th>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Address&nbsp;&nbsp;</th>
    <td><input type="text" name="address"  id="address"value="" placeholder="Enter you address" /></td>
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