<?php
include("configs.php");

$delete_page=$_GET['del_page'];

$query="delete from e_registration where id='$delete_page'";

if(mysql_query($query))

{

echo "<script>window.open('elist.php?deleted=A Page has been deleted.....!','_self')</script>";


}
else
{
echo "not deleted this page";

}
?>

