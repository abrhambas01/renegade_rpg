<?php
// 
$kingdoms = $app['database']->selectAll('kingdoms');

$guides = $app['database']->selectAll('guides');

$faqs = $app['database']->selectWhere('wikis');

require 'views/wikis.view.php';

?>