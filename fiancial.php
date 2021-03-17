<?php
//id, employee_name, money, date, purpose
session_start();
include_once 'configs.php';

if(isset($_POST['register']))
{
	$employee_name = mysql_real_escape_string($_POST['employee_name']);
	$money = mysql_real_escape_string($_POST['money']);
	$date = (mysql_real_escape_string($_POST['date']));
	$purpose = (mysql_real_escape_string($_POST['purpose']));
	
	
	if(mysql_query("INSERT INTO finan_reg(employee_name,money,date,purpose) VALUES('$employee_name','$money','$date','$purpose')"))
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
<title>Financial Detail</title>
<link rel="stylesheet" href="css/fain.css">
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
	 
	var a = document.getElementById("money");
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
	 
	var a = document.getElementById("purpose");
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
<div class="container">
<div class="main">
  <table width="70%" border="0" align="center" style="margin-top:60px;" cellspacing="15px;">
<tr>
    <th colspan="2" scope="col"><div class="css">Financial Detail</div></th>
  </tr>
  <tr>
    <td style="font-size:25px" align="right">Employee Name&nbsp;&nbsp;&nbsp;</td>
    <td><input type="text" name="employee_name"  Id="name" /></td>
  </tr>
  <tr>
    <td style="font-size:25px;" align="right">Money &nbsp;&nbsp;&nbsp;</td>
    <td><input type="number" name="money" Id="money" /></td>
  </tr>
  <tr>
    <td style="font-size:25px;" align="right">Date &nbsp;&nbsp;&nbsp;</td>
    <td><input type="date" name="date" Id="date"/></td>
  </tr>
  <tr>
    <td style="font-size:25px;" align="right">Purpose &nbsp;&nbsp;&nbsp;</td>
    <td><input type="text" name="purpose" Id="purpose" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div class="btn"><input type="submit" name="register" value="Submit" /></div></td>
  </tr>
</table>
</div>
</div>
</form>
</body>
</div>
</html>