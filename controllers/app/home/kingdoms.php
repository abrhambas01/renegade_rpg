<?php

$kingdoms = $app['database']->selectAll('kingdoms');
require 'views/home/kingdoms.php';
