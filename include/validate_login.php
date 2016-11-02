<?php 
function validate_regs(){
	$errors=array();
	if(empty($_POST['email']))
		{
			$errors['email'] = "Please enter Email Address";
		}
		elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
		{
		$errors['email'] = "Please Enter Email Address";
		}

	if(empty($_POST['password']))
		{
			$errors['password'] = "Please enter Password";
		}
		return $errors;
}
?>