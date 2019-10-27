<?php 

// if user tried to submit thru the form
if(isset($_POST['submit'])){ 
	$pin = filter_input(INPUT_POST, 'pin');
	$field = filter_var($pin, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
	$password = filter_input(INPUT_POST, 'password');

	/*** Try to validate the request if the pin is ok..***/
	// $account = new Account() ; 
	$app['user']->attempt_login($pin, $field, $password);  

}
/*if not*/

else {
	print "cannot log you in.....";
}


