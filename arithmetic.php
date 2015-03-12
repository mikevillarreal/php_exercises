<?php
$a = 10;
$b = 20;

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

add(2, 4);
subtract(2, 4);
multiply(2, 4);
divide(2, 4);


echo "===calling outside variables===";

echo $a + $b . PHP_EOL;
echo $a - $b . PHP_EOL;
echo $a * $b . PHP_EOL;
echo $a % $b . PHP_EOL;

