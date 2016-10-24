function disable(){
	document.getElementById("button_id").disabled=true;
	alert("hello");
}
function enable(){
	document.getElementById("button_id").disabled=false;
}
function show(){
	document.getElementById("disablity_discription_id").style.display="block";
}
function hide(){
	document.getElementById("disablity_discription_value_id").value="";
	document.getElementById("disablity_discription_id").style.display="none";
}