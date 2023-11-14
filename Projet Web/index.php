<?php
session_start();
require 'flight/Flight.php';
Flight::route('/', function(){
    Flight::render('map');});

Flight::start();
?>
