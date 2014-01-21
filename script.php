<script>
	function c_receiver(){
		receiver = document.getElementById('receiver').value;
		if(receiver.length == 0) {
			document.getElementById('h_receiver').innerHTML='No Receiver';
			return false;
		} else {
			document.getElementById('h_receiver').innerHTML-'';
			return true;
		}
	}

	function c_email(){
        email = document.getElementById("email").value;
        at_check = email.indexOf('@');
        dot_check = email.indexOf('.');
        
        if(email.length == 0){
			document.getElementById("h_email").innerHTML = "No Email Address.";
			return false;
        }else if(at_check < 0 && dot_check < 0){
            document.getElementById("h_email").innerHTML = "INVALID Email Address.";
			return false;
        }else{
			document.getElementById("h_email").innerHTML = "";
		    return true;
        }
    }

    function c_message(){
        message = document.getElementById("message").value;
        if(message.length == 0){
			document.getElementById("h_message").innerHTML = "No message.";
			return false;
        }else{
			document.getElementById("h_message").innerHTML = "";
		    return true;
        }
    }
            
    function authenticator(){
        if(c_name() && c_email() && c_message()){
            alert('Message Sent.');
            return true;
        }else{
            alert('Message Deferred.');
            return false;
        }
    }
</script>