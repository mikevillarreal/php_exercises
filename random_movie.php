<?php

$inputFile  = 'movies.txt';
$outputFile = 'sorted_movies.txt';


/**
 * Read in a file, return contents as an array
 **/
function readLines($inputFile)
{
	$handle = fopen($inputFile, 'r');
	$contents = fread($handle, filesize($inputFile));
	$arrayOfMovies = explode("\n", $contents);
	fclose($handle);
	return($arrayOfMovies);
	
} 
	readLines($inputFile);
 
// /**
//  * Write contents of an array to a file
//  **/
function writeLines($outputFile, $movie)
{
	$handle = fopen($outputFile, 'a+');
	fwrite($handle, $movie . PHP_EOL);
	fclose($handle);
}


// /**
//  * Pick a random movie from an array
//  **/
function randomMovie($movies)
{	
	$randomKey = array_rand($movies);
	return ($movies[$randomKey]);
}

$movies = readLines($inputFile);
$randomMovie = randomMovie($movies);

echo "Let's watch " . $randomMovie . "!\n";
echo "But " . $randomMovie . " really sucks!\n";

sort($movies);

	writeLines($outputFile, $randomMovie);
