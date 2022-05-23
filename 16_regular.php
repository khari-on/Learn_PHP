<?php


//regular experssions--squence of charater that forms a paater that is used to serach a text

//syntax - / search pattern/i

//preg_match - returns 1 if the patten is found in the string else 0;

//preg_match_all()-- no .of times or 0;

//preg_replace-- rplace the matched pattern string.


$str="This is a banana,Paragarph,Paragarph,Paragarph,Paragarph,Paragarph Going to used for Regular Expressions";

$pattern ='/ba(na){2}/i';

echo preg_replace($pattern,"papaya",$str);


//modifier

//i-case-insensitive;
//m-multiline seacrh;
//u


?>