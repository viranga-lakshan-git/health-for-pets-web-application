// JavaScript Document	

function validate_userName(){
	"use strict";
	var userName = document.getElementById("txtuserName").value;
	
	if((userName === "") || (userName === null )){
		alert("Please enter your Username");
		return false;
	}
	return true;
}

function validate_name(){
	"use strict";
	var name = document.getElementById("txtName").value;
	
	if((name === "") || (name === null)){
		alert("Please enter your Name");
		return false;
	}
	return true;
}

function validate_email(){
	"use strict";
	var email = document.getElementById("txtEmail").value;
	var dot = email.lastIndexOf(".");
	var at = email.indexOf("@");
	var len = email.length;
	
	if((at<1)||(dot-at<2)||(len-dot <3)){
		alert("Please enter a valid Email");
		return false;
	}
	return true;
}

function validate_pw(){
	"use strict";
	var pw = document.getElementById("txtPw").value;
	var cpw = document.getElementById("txtCpw").value;
	
	if((pw.length < 3) || (pw === "") || (pw === null)){
		alert("Plese re enter your Password!!");
		return false;
	}
	if((pw !== cpw)){
		alert("Password doesn't match!!");
		return false;
	}
	else{
		return true;
	}
	
}

function validate(){
	
	"use strict";
	if(validate_userName() && validate_name() && validate_email() && validate_pw()){
		alert("You have successfully registered to the site");
		window.location.reload();
	}
	else{
		Event.preventDefault();
	}
}