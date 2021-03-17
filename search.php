<!DOCTYPE HTML>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
 
	 
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="chrome=1"><!-- Optimistically rendering in Chrome Frame in IE. --> 
	<script type="text/javascript">
function dkform()
{
	 
	var a = document.getElementById("search_name");
	if(a.value== "")
	{
		alert ("You can't leave required field empty");
		a.style.border = "2px solid red";
		a.focus();
		return false;
	
	}
}
</script>
<link rel="stylesheet" href="css/search.css">
	</head><body background="images/bg.png">
    <table width="70%" border="8" style="margin-top:40px" align="center">
    <tr>
    <td><table width="100%" border="0" bgcolor="#999999"></td>
    <tr>
    <td><div class="ravi">Hospital Management System</div></td>
    <td><div class="kant">8576057645</div></td>
    </tr>
    </table>
    </tr>
    </table>
    <table width="70%" border="8"  align="center">
    <tr>
    <td><table width="100%" border="0" bgcolor="#999999"></td>
    <tr>
    <td align="center"><div class="ravi"><a href="home.php" target="_self">Back To Home</a></div></td>
    </tr>
    </table>
    </tr>
    </table>        
			<form action="" method="post" onsubmit="return dkform();">
            <table width="70%" height="270" border="3" align="center" bordercolor="#CC0033">
            <tr>
            <td><table width="70%" border="0" align="center"></td>
  <tr>
    <td><div class="input"><input type="text" name="search_name" id="search_name" value="" placeholder="Enter the name"></div></td>
  </tr>
  <tr>
    <td ><div class="search"><input type="submit" name="search" value="search for"></div></td>
  </tr>
</table>
</tr>
</table>
 
						
                        				
                      
	</form>
                 
					<div class="clearfix"></div>
				</div>
                
<?php
include("configs.php");
$output='';
$sql="select *from p_registration";
if(isset($_POST['search']))
{
 $search_term = mysql_real_escape_string($_POST['search_name']);
 $query=mysql_query("SELECT * FROM p_registration WHERE name LIKE '%$search_term%'") or die("could not search !");

$count = mysql_num_rows($query);
 if ($count==0){
 $output = 'There was No Search Result' ;
 }
 else{
       while($row = mysql_fetch_array($query)) {
	   $no1=$row['0'];
	   $no2=$row['1'];
	   $no3=$row['2'];
	   $no4=$row['3'];
	   $no5=$row['4'];
	   $no6=$row['5'];
	   $no7=$row['6'];
	   $no8=$row['7'];
	   $no9=$row['8'];
	   $output .='<table width="70%" border="1" align="center">
  <tr>
    <td width="3%" align="center"><span class="style1">ID</span></td>
    <td width="6%" align="center"><span class="style1">Name</span></td>
    <td width="8%" align="center"><span class="style1">Age</span></td>
    <td width="12%" align="center"><span class="style1">Problem</span></td>
    <td width="15%" align="center"><span class="style1">Gender</span></td>
	<td width="15%" align="center"><span class="style1">Doctor</span></td>
    <td width="13%" align="center"><span class="style1">Room</span></td>
    <td width="8%" align="center"><span class="style1">Date</span></td>
    <td width="8%" align="center"><span class="style1">Address</span></td>
   
  </tr>
 
  <tr>
    <td align="center">'.$no1.'</td>
    <td align="center">'.$no2.'</td>
    <td align="center">'.$no3.'</td>
    <td align="center">'.$no4.'</td>
    <td align="center">'.$no5.'</td>
    <td align="center">'.$no6.'</td>
    <td align="center">'.$no7.'</td>
    <td align="center">'.$no8.'</td>
    <td align="center">'.$no9.'</td>
    
  </tr>
 
</table><br><br>';
	   }
 }
?><br />
<?php echo($output); } ?>
              
			</div>
		
	</body></html>
 
