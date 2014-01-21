<script src="assets/js/jquery-1.7.1.min.js"></script>
<script>
	function check_fname() {
		fname = document.getElementById('fname').value;
		if (fname.length == 0 ) {
			document.getElementById('fullname').innerHTML="<b><font color='red'>Complete Your Full Name</font></b>";
			return false;
		} else {
			document.getElementById('fullname').innerHTML='';
			return true;
		}
	}

	function check_lname() {
		lname = document.getElementById('lname').value;
		fname = document.getElementById('fname').value;
		if (lname.length == 0 && fname.length == 0) {
			document.getElementById('fullname').innerHTML="<b><font color='red'>Complete Your Full Name</font></b>";
			return false;
		} else {
			document.getElementById('fullname').innerHTML='<img src="assets/img/check.png" style="height:30">';
			return true;
		}
	}

	function check_email(){
        email = document.getElementById("email").value;
        at_check = email.indexOf('@');
        dot_check = email.indexOf('.');
        
        if(email.length == 0){
			document.getElementById("help_email").innerHTML = "<b><font color='red'>Please Enter your Email Address.</font></b>";
			return false;
        }else if(at_check < 0 ){
            document.getElementById("help_email").innerHTML = "";
            return false;
        }else if(dot_check < 0){
            document.getElementById("help_email").innerHTML = "";
            return false;
        }else{
			document.getElementById("help_email").innerHTML = '<img src="assets/img/check.png" style="height:30">';
		    return true;
        }
    }

    function check_password() {
    	password = document.getElementById('password').value;

    	if (password.length == 0) {
    		document.getElementById('help_password').innerHTML="<b><font color='red'>Please Enter your Password</font></b>";
    		return false;
    	} else if (password.length < 6 ) {
    		document.getElementById('help_password').innerHTML="<b><font color='red'>Please Enter 6-8 characters</font></b>";
    		return false;
    	} else {
			document.getElementById("help_password").innerHTML = '<img src="assets/img/check.png" style="height:30">';
		    return true;
        }
    }

    function validate_password() {
		c_password = document.getElementById('c_password').value;
		password = document.getElementById('password').value;

		if (c_password.length == 0 ) {
			document.getElementById('confirm').innerHTML="<b><font color='red'>Please Enter your Password</font></b>";
			return false;
		} else if (c_password != password) {
			document.getElementById('confirm').innerHTML="<b><font color='red'>Password not Match</font></b>";
			return false;
		} else if (c_password.length < 6) {
            document.getElementById('confirm').innerHTML="<b><font color='red'>Please Enter 6-8 characters</font></b>";
            return false;
        } else {
			document.getElementById('confirm').innerHTML='<img src="assets/img/check.png" style="height:30">';
			return true;
		}
	}

	function authenticator(){
        if(check_fname() && check_lname() && check_email() && check_password() && validate_password()){
            alert('Success.');
            return true;
        }else{
            alert('Complete the following first.');
            return false;
        }
    }

    function loginEmail() {
        _email = document.getElementById('_email').value;

        if(_email.length == 0) {
            // alert('Invalid Email.');
            return false;
        } else {
            return true;
        }
    }

    function loginPassword() {
        _password = document.getElementById('_password').value;

        if(_password.length == 0) {
            // alert('Invalid Password.');
            return false;
        } else {
            return true;
        }
    }

    function loginAuthenticator() {
        if(loginEmail() && loginPassword()) {
            return true;
        } else {
            alert('No Email or Password.');
            return false;
        }
    }
</script>