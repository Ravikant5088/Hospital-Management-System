<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="css/home.css" />
<footer >
<table width="100%" border="1" background="images/images (6).png">
  <tr>
    <td>
        	  <?php
if($_SESSION["username"]) {
?>
				<div class="home">Welcome <?php echo $_SESSION["username"]; ?></div><div class="logout"><a href="logout.php" target="_self">Logout</a></div>
                
                
                <?php
}
?></td>
  </tr>
</table>

</head>
<body background="images/bg.png">
<table width="70%" border="1" align="center" style="margin-top:10px;">
<tr>
<td><table width="70%" border="0" align="center"></td>
  <tr>
    <td><a href="pregistration.php" target="_self"><img src="images/patient.png" width="310" height="151" /></a></td>
    <td><a href="nursing.php" target="_self"><img src="images/nursing.png" width="310" height="153" /></a></td>
    <td><a href="list.php" target="_self"><img src="images/report.png" width="314" height="151" /></a></td>
  </tr>
  <tr>
    <td><a href="search.php" target="_self"><img src="images/search.png" width="310" height="154" /></a></td>
    <td><a href="dregistration.php" target="_self"><img src="images/registration.png" width="312" height="150" /></a></td>
    <td><a href="speclist.php" target="_self"><img src="images/specilist.png" width="314" height="149" /></a></td>
  </tr>
  <tr>
    <td><a href="doctorcon.php" target="_self"><img src="images/doctor consultation.png" width="306" height="153" /></a></td>
    <td><a href="fiancial.php" target="_self"><img src="images/resource manage.png" width="315" height="145" /></a></td>
    <td><img src="images/blood bank.png" width="313" height="150" /></td>
  </tr>
</table>
</tr>
</table>
<footer style="background-color:#000; margin-top:20px;">	
		
        
       
          
	 <div style="width:100%; height:60px; ">
         
         <div style="float:left; margin-left:200px; color:#FFF; margin-top:12px;">Copyright © 2020 Hospital Management System. All Rights Reserved.</div>
        
        </div>    
			    
	</footer>
	</body></html>