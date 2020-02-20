<?php 
$kingdoms = $app['database']->selectAll('kingdoms');
$character_types = $app['database']->selectAll('character_types');
$pageTitle = "Setup your Account now";
require 'views/setup-account.view.php';


// $app['account']->return_current_user('');
