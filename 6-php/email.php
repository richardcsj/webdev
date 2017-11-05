<?php

	$emailTo = "richard.chun91@gmail.com";
	
	$subject = "Hi";
	
	$body = "This is a php test";
	
	$headers = "From: chun.r@husky.neu.edu";
	
	if (mail($emailTo, $subject, $body, $headers)) {
		
		echo "The email was sent";
		
	} else {
		
		echo "The email coult not be sent";
	}
	
	
	

?>