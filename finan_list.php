
<?php 
include("configs.php");
$sql="SELECT * FROM finan_reg";
//id, employee_name, money, date, purpose
$query=mysql_query($sql)or die(mysql_error());

?>
<!DOCTYPE HTML>
<html>
<title>p-list</title><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
 
	 
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="chrome=1"><!-- Optimistically rendering in Chrome Frame in IE. --> 
		
<link rel="stylesheet" href="css/list.css">
	</head><body>
    <form method="" action="plist.php">
     <table width="100%" border="8" style="margin-top:40px">
    <tr>
    <td><table width="100%" border="0"></td>
    <tr>
    <td><div class="ravi">Hospital Management System</div></td>
    <td><div class="kant">8576057645</div></td>
    </tr>
    </table>
    </tr>
    </table>
    <table width="100%" border="8">
    <tr>
   <td><table width="100%" border="0"></td>
    <tr>	
		 <td><div class="singh"><a href="list.php" target="_self">Back to Home</a></div></td>
          <td><div class="singhs"><a href="index.php" target="_self">Logout</a></div></td>
         </tr>
         </table>
         </tr>
         </table>
    <table width="100%" border="1" bgcolor="#FFFFFF">
      <tr>
        <td bgcolor="#9966CC"><span class="style1">Employee Name</span></td>
        <td bgcolor="#9966CC"><span class="style1">Money</span></td>
        <td bgcolor="#9966CC"><span class="style1">Purpose</span></td>
          <td bgcolor="#9966CC"><span class="style1">Delete</span></td>
      </tr>
      <?php while($row=mysql_fetch_array($query)){?>
	   
      <tr bgcolor="#FFCCFF">
        <td><?php echo $row['1']?></td>
        <td><?php echo $row['2']?></td>
        <td><?php echo $row['3']?></td>
        <td><?php echo $row['4']?></td>
           <td><a href='delete_page.php?del_page=<?php echo $row['0']; ?>'>Delete</a></td>
      </tr>
	  <?php } ?>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
 

	