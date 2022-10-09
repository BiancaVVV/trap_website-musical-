<?php

$filename = 'MARGINEAN.txt';

    $handle = fopen($filename, 'r');

    $datain = fread($handle, filesize($filename));

    $names_array = explode(';', $datain);

    foreach($names_array as $name)
    {echo "<pre>";
     $name = preg_replace( '/[\x00-\x1F\x7F-\xFF]/','', $name);
     $find = 'GPT';
     $pos = strpos($name, $find);
     if($pos === false){
        echo "Not found";}
        else{
        echo "The position of ' $find ' was found at position ' $pos '";}
    echo '<li>'.$name.'</li>';
    }

/*$pos = strpos($name, 'GPT');
if($pos === false){
   echo "Not working";}
   else{
   echo "The position of ' $find ' was found at position ' $pos '";}*/

/*$lines = explode("\n", $handle);//get
$i= 0;//initialize
foreach($lines as $key => $value){
    $cols[$i] = explode("\t", $value);
    $i++;
}

echo "<div>";
print_r($cols); //explore results
echo "</div>";*/
    ?>
