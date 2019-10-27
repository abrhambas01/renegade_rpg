<?php 
// from the laracasts php practitioner course.. thanks to the author : Jeffrey Way for enlightening me..
require 'core/init.php';
require Router::load('routes.php')->direct(Request::uri());

