<?php

//Defining random array
$phones = [
    0 => ['brand' => 'Apple', 'model' => 'Iphone 8 Plus'],
    1 => ['brand' => 'Samsung', 'model' => 'Galaxy S5'],
    2 => ['brand' => 'LG', 'model' => 'K12'],
];

//Testing json encode function
$json = json_encode($phones);

//Using function to put encoded array in json file
file_put_contents('Contents.json', $json);

$phones = file_get_contents('Contents.json');

//Decoding json content got from external file
$json = json_decode($phones, true);

//Adding new item to array
$json[] = ['brand' => 'Motorola', 'model' => 'One Vision'];

//Encoding array with new item
$finalJson = json_encode($json);

//Using APPEND function to add new item and not overwrite
file_put_contents('Contents.json', $finalJson); 

?>