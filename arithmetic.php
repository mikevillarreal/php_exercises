<?php


function add($a, $b) {
		return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
		if ($b == 0){
		return false;
	}
	return $a / $b;
	 
	} else {
		return false;
	}
		
}

if (divide(4, 0)){
	$massage = divide (4, 0);
	echo $message;
} else {
	echo "error\n";
}



