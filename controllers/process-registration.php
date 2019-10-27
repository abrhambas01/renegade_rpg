<?php 
// if user tried to register 
if(isset($_POST['register'])){
	$email = $_POST['email'];
	$full_name = $_POST['full_name'];	
	$pwd = $_POST['password'];
	
	$confirm = $_POST['confirmation'];
	
	if ( $pwd != $confirm){
		// redirect('register');
		print "not the same";
		redirect('register');
	}
	
	$pin = filter_input(INPUT_POST, 'pin');

	$field = filter_var($pin, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';	
	
	$password = filter_input(INPUT_POST, 'password');

	/*** Try to validate the request if the pin is ok..***/
	$app['user']->attempt_registration($pin, $field, $password);  
}

/*if not*/
else {
	print "Didn't enter";
	$username = "";
	$password = "";
	$the_message = "";
}


