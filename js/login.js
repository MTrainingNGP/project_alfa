$(function(){
	$("#login_button").click(function(event){
		event.preventDefault();
		$("#login_form").slideToggle("250");
	});
	$("#button_login").click(function(event){
		var email=$("#email_id").val();
	    var password=$("#password_id").val();
		event.preventDefault();
		var data={
		email:email,
		password:password
	};
		$.post("login.php",data,function(response,status,xhr){
			alert(jQuery.type(response));
			if ($.trim(response)=="1") {
				alert("logged in");
				window.location.replace("profile.php");
			}
			else{
				alert(response);
				alert("opppsss maisy");
				window.location.replace("index.php");
			}
		});
	});
});
