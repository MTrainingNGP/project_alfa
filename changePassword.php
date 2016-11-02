<?php
	require_once("include/config.php");

	extract($_POST);
	print_r($_POST);
	
		//extract($_POST);
		$update="UPDATE users set password='".$newpassword."' where reg_id='".$reg_id."' and password='".$password."'";
		if (mysql_query($update)) {
			echo "true";
		}
		else {
			echo "false";
		}
	
?>