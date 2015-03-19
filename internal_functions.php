<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"


// TEST: If var $nothing is set, display '$nothing is SET'
if(isset($nothing)){
	echo "$nothing is SET\n";
}

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
if(empty($nothing)){
	echo "$nothing is EMPTY\n";
}

// TEST: If var $something is set, display '$something is SET'
if(isset($something)){
	echo "$something is SET\n";
}

// Serialize the array $array, and output the results
$newarray = serialize($array);

	echo $newarray;

// Unserialize the array $array, and output the results

	$backArray = unserialize($newarray);

	print_r($backArray);



//===========================================================

// Create the program to meet the criteria set by each comment.

// Test and verify the output is as expected.

// Update the 'is set' check on $something to see if it is 'empty'. What happens?

// Revert previous change.

// Before the first conditional, unset($nothing). What happens?

// Find php.net function reference for the following groups: arrays, math, and strings. Familiarize yourself with the available options by reading the descriptions of each function in each list.