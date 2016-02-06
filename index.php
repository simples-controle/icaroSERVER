<?php
// debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// vendors and core router
require(__DIR__ . '/vendor/autoload.php');
//require(__DIR__ . '/icaro/IcaroRouter.php');
 
// autoload
function icaro_autoload($pClassName) {
    $pClassName = str_replace("\\", "/", $pClassName);
    //echo '- include ' . __DIR__ . "/" . $pClassName . ".php" . '<br><br>';
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("icaro_autoload");

// runing
use icaro\icaroRouter;

$icaroRouter = new icaroRouter;
$icaroRouter->run($_GET['act']);

?>