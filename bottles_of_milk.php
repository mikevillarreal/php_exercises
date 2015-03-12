<?php
// 99 bottles of milk on the wall, 99 bottles of milk.
// Take one down and pass it around, 98 bottles of milk on the wall.

// ...

// 1 bottle of milk on the wall, 1 bottle of milk.
// Take one down and pass it around, no more bottles of milk on the wall.

// No more bottles of milk on the wall, no more bottles of milk.
// Go ot the store and buy some more, 99 bottles of milk on the wall.

# Make sure 1 Bottle prints out singular bottle and not bottles



for ($i=99; $i >= 0 ; $i--) {
	if ($i==1) {
		echo "{$i} bottle of milk on the wall, {$i} bottle of milk.\n";
		echo "Take one down and pass it around, no more bottles of milk on the wall.\n\n";
	} else if ($i==0) {
		echo "No more bottles of milk on the wall, no more bottles of milk.\n";
		echo "Go to the store and buy some more, 99 bottles of milk on the wall.\n";

	}else {
	echo "{$i} bottles of milk on the wall, {$i} bottles of milk.\n";
		// $i--;
	
	echo "Take one down and pass it around, ". ($i-1). " bottles of milk on the wall.\n\n";
	

}	
	
}