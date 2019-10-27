<?php 
require 'core/helpers.php';

if (there_is_a_logged_on_user() == true) { 
	/*
	plucking missions for the current user
	*/
	$missions = $app['database']->pluck('campaigns',[
		'id' => '3023' 
	])->where('role_id',2);

	var_dump($missions);

	// pass the view wherein 
	require 'views/index.view.php';

}

else { 
	$this->user_is_already_taken() ; 
}
