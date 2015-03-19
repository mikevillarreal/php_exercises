<?php

// Output should be ordered by units in descending order
// Column headers should appear in the following format
// Office | Date | Report Name
// Total  sales Units | Number of Employees | Units per Employee
// Units | Full Name | Employee Number 

function parseReport($filename) {

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$arrayOfContent = explode("\n", $contents);
	fclose($handle);
	// print_r($contents);		
	return ($arrayOfContent);
}
 print_r(parseReport('exercise_sales_report.txt'));

