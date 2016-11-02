$(function(){
	$("#changePassword_atag").click(function(event){
		event.preventDefault();
		$("#changePassword_div").slideToggle("250");
	});
	//console.log(data);
	$("#change_button").click(function(event){
		event.preventDefault();
		var data={
		password:$("#oldPassword_id").val(),
		newpassword:$("#newPassword_id").val(),
		reg_id:id
	}
		$.post("changePassword.php",data,function(response){
			if ($.trim(response)=="true") {
				alert("password changed");
			}
			else {
				alert("their is some kind of problem");
			}
	})
	});
	
});