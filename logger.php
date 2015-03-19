<?php

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

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
