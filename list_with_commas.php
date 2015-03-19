<?php

 // // Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 //   // Your solution goes here!
 }


 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);
 // print_r($physicistsArray);

 
 $lastItem = array_pop($physicistsArray);
 // echo $lastItem;
 $famousFakePhysicists = implode(', ', $physicistsArray) . " and {$lastItem}";

 // echo $famousFakePhysicists;


 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";
