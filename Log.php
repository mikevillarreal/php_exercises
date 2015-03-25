<?php
class Log
{
	public $filename;

	public function logMessage($logLevel, $message)
	{
		date_default_timezone_set("America/Chicago");

		$date = date('Y-m-d');
		$time = date('H:i:s');

		$this->filename="myLog-" . date('Y-m-d') . ".log";
		$handle = fopen($this->filename, 'a+');

		$string = $date . '|' . $time . '|' . $logLevel . '|' . $message;

		fwrite($handle, PHP_EOL. $string);
		fclose($handle);
				
	}


	public function logInfo($message) {
	    $this->logMessage("INFO", $message);
	}
	public function logError($message) {
	    $this->logMessage("ERROR", $message);
	}
// logInfo("This is an informative message.");
// logError("This here be an error.");


}

?>
