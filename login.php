<?php
require_once("include/config.php");
require_once("include/validate_login.php");
$errors=array();
validate_regs();
if (empty($errors)&&!empty($_POST)) {
	# code...
	extract($_POST);
//$password = md5($password);
  $query="SELECT * from users where password='$password' and email='$email' ";
  $row = mysql_fetch_assoc(mysql_query($query));
  //print_r($row);
  if (isset($row["reg_id"])){
  		$_SESSION["auth"]="true";
  		$_SESSION["u_data"]=$row;
		echo "1";
  }
  else{
    echo "0";
	}
}
else{
	header("location:index.php");
}
//print_r($_POST);

?>