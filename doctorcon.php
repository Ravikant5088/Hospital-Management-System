<?php
//date, doctor_name, patient_name, time_slot
session_start();
include_once 'configs.php';
include_once 'function.php';

if(isset($_POST['submit']))
{
	$date = mysql_real_escape_string($_POST['date']);
	$doctor_name = mysql_real_escape_string($_POST['doctor_name']);
	$patient_name = (mysql_real_escape_string($_POST['patient_name']));
	$time_slot = (mysql_real_escape_string($_POST['time_slot']));
	if(mysql_query("INSERT INTO doctor_con(date,doctor_name,patient_name,time_slot) VALUES('$date','$doctor_name','$patient_name','$time_slot')"))
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
<title>doctor consultation</title>
<link rel="stylesheet" href="css/preg.css" />
</head>

<body>
<form method="post">
<table width="50%" border="1" align="center">
 <tr>
    <th height="50" style="font-size:24px" align="right">Date&nbsp;&nbsp;</th>
    <th align="left"><input type="date"  name="date" class="abcd" /></th>
  </tr>
 <tr>
    <th height="50" style="font-size:24px" align="right">Doctor Name&nbsp;&nbsp;</th>
    <td><select name="doctor_name" class="bc"> <?php echo get_option_list("d_registration","id","name");?></select></td>
  </tr>
 <tr>
    <th height="50" style="font-size:24px" align="right">Patient name&nbsp;&nbsp;</th>
    <td><select name="patient_name" class="bc"> <?php echo get_option_list("p_registration","id","name");?></select></td>
  </tr>
  <tr>
    <th height="50" style="font-size:24px" align="right">Time&nbsp;&nbsp;</th>
   <th align="left"><input type="time"  name="time_slot" class="abcd" /></th>
  </tr>
   <tr>
    <td height="50" colspan="2" style="font-size:24px" align="center"><input type="submit" value="Submit" name="submit" class="abcde" /></td>
    </tr>
</table>
</form>
</body>
</html>