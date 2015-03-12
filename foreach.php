<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	if (is_string($thing)) {
		echo "{$thing} is a string\n";
	}else if (is_bool($thing)) {
		echo "{$thing} is a boolean\n";
	}else if (is_numeric($thing)) {
		echo "{$thing} is a number\n";
	}else if (is_null($thing)) {
		echo "{$thing} is a null\n";
	}
	else if (is_array($thing)) {
		echo "{$thing} is a array\n";
	}
}