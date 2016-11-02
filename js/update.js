var err_final;
function empty(ele,del_span,add_span){
	console.log(err_final);
	var msg="empty!!!!!!!!";
	var tag="empty";
	if (ele.value.length==0||ele.value==null) {
		add_span(ele,msg,tag);
		err_final=true;
		}
	else{
		del_span(ele,tag);
		err_final=false;
	}
	
}
function lengthy(ele,del_span,add_span){
	console.log(err_final);
	var msg="out of bounds";
	var tag="lengthy";
	
	if (ele.value.length>ele.getAttribute('maxlength')||ele.value.length<ele.getAttribute('minlength')) {
		
		add_span(ele,msg,tag);
		err_final=true;
	}
	else{
			del_span(ele,tag);
			err_final=false;
		
	}
}
function contact(ele,del_span,add_span) {
	var tag="contact";
	var msg="mobile number is invalid";
	var mobpatt=/^\d{10}$/;
		if (!mobpatt.test(ele.value)) {
			add_span(ele,msg,tag);
			err_final=true;
		}
		else{
			del_span(ele,tag)
			err_final=false;
		}
}
function alphabetz(ele,del_span,add_span){
	var alphapatt=/^[A-Za-z]$/;
	var tag="alphabetz";
	if (alphapatt.test(ele.value)) {
		add_span(ele,"only alphabets are allowed",tag);
		err_final=true;
	}
	else{
		del_span(ele,tag);
		err_final=false;
	}
}
function emailVal (ele,del_span,add_span){
	var atpos=ele.value.indexOf("@");
	var dotpos=ele.value.lastIndexOf(".");
	var msg="invalid email address";
	var tag="email";
	if (!(atpos>1&&dotpos-atpos>2)){
		add_span(ele,msg,tag);
		err_final=true;
	}
	else {
		del_span(ele,tag);
		err_final=false;
	}
}
function add_span(param,msg,tag){
	var selector_name="span[id='"+param.name+"_"+tag+"']";
	var test=document.querySelectorAll(selector_name);
	//console.log(test);
	if (test.length>=1) {
		return true;
	}
	else {
		var span_id_name=param.name+"_"+tag;
		var err_span=document.createElement("SPAN");
		var t = document.createTextNode(msg);
		err_span.appendChild(t);
		err_span.setAttribute('id',span_id_name);
		param.nextSibling.nextSibling.appendChild(err_span);
		return false;
	}
}
function del_span(param,tag){
	var errorSpan = document.getElementById(param.name+"_"+tag);
	var span_id_name=param.name+"_"+tag;
    if(errorSpan==null){
		return true;
	}else{
		document.getElementById(span_id_name).parentNode.removeChild(document.getElementById(span_id_name));
	}
}
function final(event,del_span,add_span){
	event.preventDefault();
	if(!err_final&&document.getElementById("term_id").checked){
		//send ajax request
		alert("form submitted");

		return true;
	}
	else{
		alert("either some field are empty or checkbox is not checked");
		return false;
	}
}
function gender(){
	if(!document.getElementById("male_id").checked&&!document.getElementById("female_id").checked){
		err_final=true;
		alert("gender");
		//document.getElementById("err_msg_gender").innerHTML="cannot be left unchecked";
		//document,getElementById("err_msg_gender").className=+" has-error";
		return false;
	}
	else{
		err_final=false;
		//document.getElementById("err_msg_gender").innerHTML="";
		//document,getElementById("err_msg_gender").className="form-group";
		return true;
	}
}
function disablity(){
	if(!document.getElementById("phy_disable_yes").checked&&!document.getElementById("phy_disable_no").checked){
		err_final=true;
		alert("diable");
		//document.getElementById("err_msg_disable").innerHTML="cannot be left unchecked";
		//document,getElementById("err_msg_disable").className=+" has-error";
		return false;
	}
	else{
		err_final=false;
		//document.getElementById("err_msg_disable").innerHTML="";
		//document,getElementById("err_msg_disable").className="form-group";
		return true;
	}
}
function checkedx(ele,event){
	console.log(ele);
	gender();
	disablity();
	if (err_final==true||!gender()||!disablity()) {
		event.preventDefault();
		document.getElementById("button_id").disabled=true;
		return false;
	}
	else{
		document.getElementById("button_id").disabled=false;
		return true;
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//ajax request
$(function(){
	$("#buttox").click(function(event){
		event.preventDefault();
	var data={
	first_name:$("#fname_id").val(),
	last_name:$("#lname_id").val(),
	mother_name:$("#mother_name_id").val(),
	father_name:$("#father_name_id").val(),
	dob:$("#date_id").val(),
	gender:$("input[name~='gender']").val(),
	country:$("#country_id").val(),
	state:$("#state_id").val(),
	city:$("#city_id").val(),
	district:$("#district_id").val(),
	pincode:$("#pin_id").val(),
	phone_no:$("#phone_id").val(),
	mobile_no:$("#mobile_id").val(),
	nationality:$("#nationality_id").val(),
	religion:$("#religion_id").val(),
	email:$("#email_id").val(),
	y_o_p:$("#graduation_date_id").val(),
	phy_attribute:$("input[name~='phy_disable']").val(),
	phy_attribute_discription:$("#physical_discription_value_id").val(),
	board_university:$("#education_id").val(),
	religion:$("#religion_id").val()
	// created:now()
};
console.log(data);
$.post("update.php",data,function(response,status,xhr){
	if ($.trim(response)=="true") {
		alert("updated succesfully");
		window.location.replace("profile.php");
	}
	else{
		alert("update unsuccessfull");
	}
});
});
});



