<?php 
// if user tried to register 
if(isset($_POST['register'])){
	// print_r($_POST);

	$email = $_POST['email'];
	$full_name = $_POST['full_name'];	
	$password = $_POST['password'];
	$confirm = $_POST['confirmation'];
	
	if ( $password != $confirm){
		// redirect('register');
		redirect('register');
		die();
	}
	
	$pin = filter_input(INPUT_POST, 'email');
	$field = filter_var($pin, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';	
	$password = filter_input(INPUT_POST, 'password');

	/*** Try to validate the request if the pin is ok..***/
	// echo $pin ." " .$field ." " .$password; 

	$app['user']->attempt_registration($pin, $field, $password);  
}

/*if not*/
else {
	print "Didn't enter";
	$username = "";
	$password = "";
	$the_message = "";
}


