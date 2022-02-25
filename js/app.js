function test() {
    var password_ = document.getElementById("password_signin");
    if (password_.type === "password") {
        password_.type = "text";
    } else {
        password_.type = "password";
    }
}

function passw_01() {
    var password_ = document.getElementById("password");
    if (password_.type === "password") {
        password_.type = "text";
    } else {
        password_.type = "password";
    }
}

function passw_02() {
    var password_ = document.getElementById("c_password");
    if (password_.type === "password") {
        password_.type = "text";
    } else {
        password_.type = "password";
    }
}

function fname() {
	var firstnamei=$("#firstName").val();
    var alpha = /^[a-zA-Z ]*$/;
	if ((firstnamei != "" && firstnamei.match(alpha))) {

//	document.getElementById("firstName").style.boxShadow = "0 0 5px green" ;
	//document.getElementById("cni").style.boxShadow = "0 0 5px green";
	document.getElementById("firstName").style.borderColor = "green";
	document.getElementById("cni").style.borderColor = "green";
	document.getElementById("cni").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
 
}
 

else  {
	document.getElementById("cni").innerHTML =	"";
	//document.getElementById("cni").style.boxShadow = "0 0 5px red";
	document.getElementById("cni").style.borderColor = "red";
	document.getElementById("firstName").style.borderColor = "red";
//	document.getElementById("firstName").style.boxShadow = "0 0 5px red" ;
    document.getElementById("cni").innerHTML =	"<span style='color: red;FONT-size:15px;'><i class='fa fa-exclamation-circle'></i></span>";
	 
 
}
}

function lname() {
	var lastnamei=$("#lastName").val();
    var alpha = /^[a-zA-Z ]*$/;
	if ((lastnamei != "" && lastnamei.match(alpha))) {

//	document.getElementById("lastName").style.boxShadow = "0 0 5px green" ;
//	document.getElementById("lname").style.boxShadow = "0 0 5px green";
	document.getElementById("lastName").style.borderColor = "green";
	document.getElementById("lname").style.borderColor = "green";
	document.getElementById("lname").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
 
}
 

else  {
	document.getElementById("lname").innerHTML =	"";
//	document.getElementById("lname").style.boxShadow = "0 0 5px red";
	document.getElementById("lname").style.borderColor = "red";
	document.getElementById("lastName").style.borderColor = "red";
//	document.getElementById("lastName").style.boxShadow = "0 0 5px red" ;
    document.getElementById("lname").innerHTML =	"<span style='color: red;FONT-size:15px;'><i class='fa fa-exclamation-circle'></i></span>";
	 
 
}
}
function lemail() {
	var emaili=$("#email").val();
    var alpha = /^\S+@\S+$/;
	if ((emaili != "" && emaili.match(alpha))) {

//	document.getElementById("email").style.boxShadow = "0 0 5px green" ;
//	document.getElementById("email").style.boxShadow = "0 0 5px green";
	document.getElementById("email").style.borderColor = "green";
	document.getElementById("lmail").style.borderColor = "green";
	document.getElementById("lmail").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
 
}
 

else  {
	document.getElementById("lmail").innerHTML =	"";
//	document.getElementById("lmail").style.boxShadow = "0 0 5px red";
	document.getElementById("lmail").style.borderColor = "red";
	document.getElementById("email").style.borderColor = "red";
//	document.getElementById("email").style.boxShadow = "0 0 5px red" ;
    document.getElementById("lmail").innerHTML =	"<span style='color: red;FONT-size:15px;'><i class='fa fa-exclamation-circle'></i></span>";
	 
 
}
}

function lpass() {
	var passwordi=$("#password").val();
    var alpha = /^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/;
	if ((passwordi != "" && passwordi.match(alpha))) {

	//document.getElementById("password").style.boxShadow = "0 0 5px green" ;
	//document.getElementById("password").style.boxShadow = "0 0 5px green";
	document.getElementById("password").style.borderColor = "green";
	document.getElementById("lpass").style.borderColor = "green";
	document.getElementById("lpass").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
 
}
 

else  {
	document.getElementById("lpass").innerHTML =	"";
//	document.getElementById("lpass").style.boxShadow = "0 0 5px red";
	document.getElementById("lpass").style.borderColor = "red";
	document.getElementById("password").style.borderColor = "red";
//	document.getElementById("password").style.boxShadow = "0 0 5px red" ;
    document.getElementById("lpass").innerHTML =	"<span style='color: red;FONT-size:15px;'><i class='fa fa-exclamation-circle'></i></span>";
	 
 
}
}

function cpass() {
    var passwordi=$("#password").val();
	var cpasswordi=$("#c_password").val();
    var alpha = /^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/;
	if ((cpasswordi != "" && cpasswordi.match(alpha) && passwordi==cpasswordi)) {

	//document.getElementById("c_password").style.boxShadow = "0 0 5px green" ;
	//document.getElementById("c_password").style.boxShadow = "0 0 5px green";
	document.getElementById("c_password").style.borderColor = "green";
	document.getElementById("cpass").style.borderColor = "green";
	document.getElementById("cpass").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
 
}
 

else  {
	document.getElementById("cpass").innerHTML =	"";
	//document.getElementById("cpass").style.boxShadow = "0 0 5px red";
	document.getElementById("cpass").style.borderColor = "red";
	document.getElementById("c_password").style.borderColor = "red";
	//document.getElementById("c_password").style.boxShadow = "0 0 5px red" ;
    document.getElementById("cpass").innerHTML =	"<span style='color: red;FONT-size:15px;'><i class='fa fa-exclamation-circle'></i></span>";
	 
 
}
}

function lemail() {
	var emaili=$("#email_signin").val();
    var alpha = /^\S+@\S+$/;
	if ((emaili != "" && emaili.match(alpha))) {

//	document.getElementById("email").style.boxShadow = "0 0 5px green" ;
//	document.getElementById("email").style.boxShadow = "0 0 5px green";
	document.getElementById("email_signin").style.borderColor = "green";
	document.getElementById("lmail").style.borderColor = "green";
	document.getElementById("lmail").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
 
}
 

else  {
	document.getElementById("lmail").innerHTML =	"";
//	document.getElementById("lmail").style.boxShadow = "0 0 5px red";
	document.getElementById("lmail").style.borderColor = "red";
	document.getElementById("email_signin").style.borderColor = "red";
//	document.getElementById("email").style.boxShadow = "0 0 5px red" ;
    document.getElementById("lmail").innerHTML =	"<span style='color: red;FONT-size:15px;'><i class='fa fa-exclamation-circle'></i></span>";
	 
 
}
}

function lpass() {
	var passwordi=$("#password_signin").val();
    var alpha = /^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/;
	if ((passwordi != "" && passwordi.match(alpha))) {

	//document.getElementById("password").style.boxShadow = "0 0 5px green" ;
	//document.getElementById("password").style.boxShadow = "0 0 5px green";
	document.getElementById("password_signin").style.borderColor = "green";
	document.getElementById("lpass").style.borderColor = "green";
	document.getElementById("lpass").innerHTML = "<span style='color: green;FONT-size:15px;'><i class='fa fa-check'></i></span>";
 
}
 

else  {
	document.getElementById("lpass").innerHTML =	"";
//	document.getElementById("lpass").style.boxShadow = "0 0 5px red";
	document.getElementById("lpass").style.borderColor = "red";
	document.getElementById("password_signin").style.borderColor = "red";
//	document.getElementById("password").style.boxShadow = "0 0 5px red" ;
    document.getElementById("lpass").innerHTML =	"<span style='color: red;FONT-size:15px;'><i class='fa fa-exclamation-circle'></i></span>";
	 
 
}
}