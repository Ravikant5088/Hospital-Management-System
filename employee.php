<?php
//id, id, name, catogery, age, address, gender, email, date, contact, qualification 
session_start();
include_once 'configs.php';

if(isset($_POST['submit']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$catogery = mysql_real_escape_string($_POST['catogery']);
	$age = mysql_real_escape_string($_POST['age']);
	$address = (mysql_real_escape_string($_POST['address']));
	$gender = (mysql_real_escape_string($_POST['gender']));
	$email = (mysql_real_escape_string($_POST['email']));
	$date = (mysql_real_escape_string($_POST['date']));
	$contact = (mysql_real_escape_string($_POST['contact']));
	$qualification = (mysql_real_escape_string($_POST['qualification']));
	
	if(mysql_query("INSERT INTO e_registration(name,catogery,age,address,gender,email,date,contact,qualification) VALUES('$name','$catogery','$age','$address','$gender','$email','$date','$contact','$qualification')"))
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
</head>
<body>
<form method="post">
<div class="tab">
<table width="30%" border="0"  align="center">
  <tr>
    <td style="font-size:36px;">Employee Registration</td>
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
    <td><input type="text" name="name" value="" placeholder="Enter you name" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Catogery&nbsp;&nbsp;</th>
    <td align="left"> <select name="catogery" class="abc">
                         <option selected="catogery"></option>
                         <option value="Nurse">Nurse</option>
                           <option value="WardBoy">WardBoy</option>
                           </select></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Age&nbsp;&nbsp;</th>
    <td><input type="number" name="age" value="" placeholder="Enter you age" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Address&nbsp;&nbsp;</td>
    <td><input type="text" name="address" value="" placeholder="Enter you problem" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Gender&nbsp;&nbsp;</th>
    <td> <select name="gender" class="abc">
                         <option selected="gender" value="please select............">please select................</option>
                         <option value="MALE">MALE</option>
                           <option value="FEMALE">FEMALE</option>
                           </select></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Email&nbsp;&nbsp;</th>
    <td align="left"><input type="email"  name="email" class="abcd" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Date&nbsp;&nbsp;</th>
    <th align="left"><input type="date"  name="date" class="abcd" /></th>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Contact&nbsp;&nbsp;</th>
    <td><input type="number" name="contact" value="" placeholder="Enter you address" /></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Qualification&nbsp;&nbsp;</th>
    <td align="left"><input type="text"  name="qualification" class="abcd" /></td>
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