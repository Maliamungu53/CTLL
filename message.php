<?php

	//let's get all form values 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
	$message = $_POST['message'];
	if(!empty($email) && !empty($message)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$reciever = "maliamunguemma72@gmail.com";
			$subject = "From: $name <$email>";
			// marging concatinating all user values inside body variables. \n is used for a new line
		$body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message\n\nRegards,\n$name";
		$sender = "From: $email"; //sender email 
		if(mail($reciever, $subject, $body, $sender)){ //mail() is an inbuilt function to send mail
			echo "Your message has been sent";
		}else{
			echo "Sorry! failed to send your message";
		}
		}else{
			echo "Enter a valid email address";
		}
	}else{
		echo "Email and password field is required";
	}
?>