<?php 
/*
used for players searching other players information..
**/
$player_key = $_POST['player_key'];

$app['database']->pluck('users',$player_key) ; 

