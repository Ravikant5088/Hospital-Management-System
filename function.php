<?php
//generate dynamic list
function get_option_list($table,$col_id,$col_value,$sel=0)
{
	$sql="select* from $table";
	$rs=mysql_query($sql) or die(mysql_error());
	$option_list="<option value=o>please select</option>";
	while($data=mysql_fetch_assoc($rs))
	{
		$option_list .="<option value='$data[$col_value]'>$data[$col_value]</option>";
	}
	return $option_list;
}
?>