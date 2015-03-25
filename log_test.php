<?php


require_once 'Log.php';

$myLog= new Log();


$myLog->logInfo("This is an informative message.");
$myLog->logError("This here be an error.");

?>