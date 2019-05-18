function validateForm() {
    
	var username = document.forms["myForm"]["username"].value;
	var password = document.forms["myForm"]["password"].value;
	var first_name = document.forms["myForm"]["first_name"].value;
	var last_name = document.forms["myForm"]["last_name"].value;
    var surname = document.forms["myForm"]["surname"].value;
    var email= document.forms["myForm"]["email"].value;
	
	if(username == "" || password =="" || first_name == "" || last_name== "" || surname== ""){
		alert("Please enter data for all the fields");
		return false;
	}
	else{
		return true;
	}
}