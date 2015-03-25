<?php
date_default_timezone_set("America/Chicago");

function logMessage($logLevel, $message)
{
	$date = date('Y-m-d');
	$time = date('H:i:s');

	$filename = ('log-' . $date . '.txt');

	$handle = fopen($filename, 'a+');

	$string = $date . '|' . $time . '|' . $logLevel . '|' . $message;

	fwrite($handle, PHP_EOL. $string);
	fclose($handle);
			
}


function logInfo($message) {
    logMessage("INFO", $message);
}
function logError($message) {
    logMessage("ERROR", $message);
}
logInfo("This is an informative message.");
logError("This here be an error.");

