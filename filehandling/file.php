<?php

// $a= readfile('notes.txt');

// echo $a;


//fopen()

// $a=fopen("notes.txt",'r');

// echo fread($a,filesize("notes.txt"));jkvm
// echo fgets($a);
// echo fgets($a);
// echo fgets($a);


// echo fgetc($a);
// echo fgetc($a);

// while(!feof($a)){

//     echo  fgets($a);
//     echo "<br>";
// };


// while(!feof($a)){

//     echo  fgetc($a);
//     echo "<br>";
// };

// fclose($a);

echo $_COOKIE['user'];

//create and write a file:
$a=fopen("notes.txt",'a');

$hello = "everyoe\n";


fwrite($a,$hello);
fclose($a);

?>