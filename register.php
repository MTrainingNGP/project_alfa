<?php 
require_once("include/config.php");
print_r($_POST);
extract($_POST);

$insert = $insert = "INSERT into users set 
				   		first_name = '".$first_name."',
				   		last_name = '".$last_name."',

						father_name = '".$father_name."',
						mother_name = '".$mother_name."',

						dob = '".$dob."',
						gender = '".$gender."',

						country = '".$country."',
						state = '".$state."',

						city = '".$city."',
						district = '".$district."',
						pincode = '".$pincode."',

						nationality = '".$nationality."',
						religion = '".$religion."',

						phone_no = '".$phone_no."',
						mobile_no = '".$mobile_no."',

						email = '".$email."',
						board_university = '".$board_university."',

						y_o_p = '".$y_o_p."',
						

						phy_attribute = '".$phy_attribute."',
						phy_attribute_discription = '".$phy_attribute_discription."',

						password =md5('".$password."')
						
						
						
		";
if(mysql_query($insert)){						
			echo "true";
		}
		else{
			echo "false";
		}
?>