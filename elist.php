
<?php 
include("configs.php");
$sql="SELECT * FROM e_registration";

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
        <td bgcolor="#9966CC"><span class="style1">ID</span></td>
        <td bgcolor="#9966CC"><span class="style1">Name</span></td>
        <td bgcolor="#9966CC"><span class="style1">Catogery</span></td>
        <td bgcolor="#9966CC"><span class="style1">Age</span></td>
        <td bgcolor="#9966CC"><span class="style1">Address</span></td>
        <td bgcolor="#9966CC"><span class="style1">Gender</span></td>
        <td bgcolor="#9966CC"><span class="style1">Email</span></td>
        <td bgcolor="#9966CC"><span class="style1">Date</span></td>
         <td bgcolor="#9966CC"><span class="style1">Contact</span></td>
         <td bgcolor="#9966CC"><span class="style1">Qualification</span></td>
          <td bgcolor="#9966CC"><span class="style1">Print</span></td>
          <td bgcolor="#9966CC"><span class="style1">Delete</span></td>
      </tr>
      <?php while($row=mysql_fetch_array($query)){?>
	   
      <tr bgcolor="#FFCCFF">
        <td><?php echo $row['0']?></td>
        <td><?php echo $row['1']?></td>
        <td><?php echo $row['2']?></td>
        <td><?php echo $row['3']?></td>
        <td><?php echo $row['4']?></td>
        <td><?php echo $row['5']?></td>
        <td><?php echo $row['6']?></td>
        <td><?php echo $row['7']?></td>
        <td><?php echo $row['8']?></td>
        <td><?php echo $row['9']?></td>
          <td><a href="printpage.php?print=<?php echo$row['0'];?>";>Print Now</a></td>
           <td><a href='eremove_page.php?del_page=<?php echo $row['0']; ?>'>Delete</a></td>
      </tr>
	  <?php } ?>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
 

	