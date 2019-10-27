<?php 

require 'views/app/factions/create.php';	

$app['database']->insert('factions',[
	'faction_name' => $_POST['faction_name'],	
	'faction_type_id' => $_POST['faction_type_id'],
]);


