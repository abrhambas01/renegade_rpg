<?php

// require '../core/application_classes/Rating.php';

require "Rating.php";

$rating = new Rating(200, 1000, Rating::LOST, Rating::WIN);
$rating = new Rating(1000,2000, Rating::DRAW, Rating::DRAW);
$results = $rating->getNewRatings();

print "New Rating for Player a : ".$results['a'] ."\n" ;
print "New Rating for Player b : ".$results['b'] ; 
