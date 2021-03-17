<html>
<head>
     
	 <style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style3 {font-size: 12px; font-weight: bold; }
-->
     </style>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
        <body >
               <center><h2>For Printing This Page click This Print Button</h2>
            
                <input type="button" value="Print Button" onClick="PrintDiv();" />
            </center><br><br><hr>
			<div id="divToPrint" >
               <div>
         
<?php 
include("configs.php");
$print_page=$_REQUEST['print'];
$res ="SELECT * FROM `p_registration` where `id`='$print_page'";
$p_registration=mysql_query($res);
while($res=mysql_fetch_assoc($p_registration))
{

?>


<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=900,height=600');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
<body>
<table width="100%" height="900" border="0" align="center">
  <tr>
    <td><div align="center">Id : <?php echo $res['id'];?>&nbsp; &nbsp;</div></td>
  </tr>
  <tr>
    <td height="373"><div align="center">
      <table width="900px" height="" border-top="1" bordercolor="#006633">
        <tr>
          <td width="58%" height="365" valign="top">
              
              <div align="center">
                <table width="800" height="700" border="0" align="left">
                  <tr>
                    <td width="36%" height="20"><blockquote class="style3">
	                    <p>Name :-</p>
                    </blockquote></td>
                    <td width="32%"><span class="style3"><?php echo $res['name'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Age :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['age'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Problem :- </p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['problem'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Gender :- </p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['gender'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Doctort :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['doctor'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Room :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['room'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="0"><blockquote class="style3">
	                    <p>Date :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['date'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Address :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['address'];?></span></td>
                  </tr>
                </table>
            </div></td>
          </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
<?php  } ?>