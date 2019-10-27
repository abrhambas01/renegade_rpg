<?php
// NC - not completed
// C - complete
$router->define([
    '' => 'controllers/index.php', // N.C
    'armory' => 'controllers/app/armory.php',
    'api/v1/username' => 'controllers/app/check_username.php',
    'setup-account' => 'controllers/account/setup-account.php',
    'setup-payment' => 'controllers/setup-payment.php',
    'submit-weapon' => 'controllers/weapons/create.php',
    'create-faction' => 'controllers/app/factions/create.php',
    'create-guide' => 'controllers/submit-guides.php',
    'create-walkthrough' => 'controllers/create-walkthrough.php',
    'join-faction' => 'controllers/app/factions/join.php',
    'factions' => 'controllers/app/factions/index.php', 
    'guides' => 'controllers/guides.php',   
    'kingdoms' => 'controllers/app/home/kingdoms.php',
    'license-terms' => 'controllers/license.view.php',
    'login' => 'controllers/login.php',
    'logout' => 'controllers/logout.php',
    'missions' => 'controllers/browse_missions.php',
    'payment-options' => 'controllers/payment-options.php',
    'player-rankings' => 'controllers/player-rankings.php',
    'register' => 'controllers/register.php',
    'search-player/' => 'controllers/app/home/player-search.php',
    'process-login' => 'controllers/process-login.php',
    'process-register' => 'controllers/process-registration.php',
    'walkthroughs' => 'controllers/payment-options.php',
    'weapons' => 'controllers/weapons/index.php',
    'wikis' => 'controllers/app/wikis/index.php',
    'view-map' => 'controllers/app/map.php'
]);
