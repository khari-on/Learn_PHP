<?php
$servername='localhost';
$username="root";
$password="";
$db="fourm";

//create a connect
$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("connecton field" . mysqli_connect_error());
   
}




?>
