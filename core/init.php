<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/helpers.php';
require 'core/util.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';		
require 'core/database/QueryBuilder.php';
require 'core/database/Account.php';
require 'models/Campaign.php';

// you can add classes here to instantiate
$app['user'] = new Account(Connection::make($app['config']['database']));

// you can now then use $app['user']->attempt_login($params) or $app['user']->attempt_registration() ;  

$app['campaign'] = new Campaign(Connection::make($app['config']['database']));
$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);
