<?php

function parseContacts($filename)
{

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contentsArray = explode("\n", $contents);
    return $contentsArray;
    fclose($handle);
}

var_dump(parseContacts('contacts.txt'));


function addSomeNames($filename, $names) {

	$handle = fopen($filename, 'a+');
    fwrite($handle, PHP_EOL. $names);
    fclose($handle);

}
 addSomeNames('contacts.txt', 'Mike Villarreal');
