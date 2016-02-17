<?php
// debug
error_reporting(E_ERROR);
ini_set('display_errors', 1);

// auto loading for vendors and core parckges
$loader = require 'vendor/autoload.php';
$loader->add('icaro', __DIR__);

// runing icaro
require(__DIR__ . '/icaro/IcaroRouter.php');
$icaroRouter = new icaro\icaroRouter;
$icaroRouter->run($_GET['act']);
?>