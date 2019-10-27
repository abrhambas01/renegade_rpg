<?php 

$weapons = $app['database']->pluck("weapons");

require 'views/weapons/index.php';