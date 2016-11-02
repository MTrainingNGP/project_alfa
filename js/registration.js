
 
// function empty(element,spanClass){
// 	var str= element.value;
// 	if (str.length==0||str.validity.valueMissing) {
// 		element.setCustomValidity("this field cannot be empty");
// 		document.getElementById(spanClass).innerHTML+=element.validationMessage+'<br>';
// 		console.log(element);
// 	}
// }


// var required= document.querySelectorAll("input[required]");
// var span=document.querySelectorAll("span")
 //for (var i = required.length - 1; i >= 0; i--) {
//	(function (){
// 		var spanId =required[i].nextSibling.nextSibling.getAttribute('id');
// 	var element=required[i];
// 	required[i].addEventListener("blur",function (){empty(element,spanId)});
// 	})();
// }
function length(element,spanId){
	var str= element.value;
	if (str.length>5||element.validity.tooLong) {
		element.setCustomValidity("this field cannot be more than 50 characters");
		document.getElementById(spanId).innerHTML+=element.validationMessage+'<br>';
		console.log(element);
	}
}
var required_length= document.querySelectorAll('input[maxlength="50"]');
console.log(required_length);
for (var i = required_length.length - 1; i >= 0; i--) {
	(function (){
		var spanId =required_length[i].nextSibling.nextSibling.getAttribute('id');
	var element=required_length[i];
	required_length[i].addEventListener("blur",function (){length(element,spanId)});
	})();
}

