<?php
require '.././varibale.php';
//connetcting databse we just have two wys mysqliextenion and pdo

//connect with mysqli extension we two ways object oriented & procedural api
// CREATE TABLE `avodha`.`guest` ( `S.no` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `email` VARCHAR(50) NOT NULL , PRIMARY KEY (`S.no`)) ENGINE = InnoDB;




//Procedural

$servername='localhost';
$username="root";
$password="";
$db="avodha";

//create a connect
$conn=mysqli_connect($servername,$username,$password,$db);

//check connection

if(!$conn){
    die("connecton field" . mysqli_connect_error());
};

// echo "connected successfully";

//create the database:
// $sql ="CREATE DATABASE AVODHA";

// if(mysqli_query($conn,$sql)){
//     echo "DataBase is created successfully";
// }else{
//     echo "ERROR CRAETING A DATABASE" .mysqli_eroor($conn);
// }

//create the table in a database:
// $sql ="CREATE TABLE `Coustomer` ( `S.no` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `email` VARCHAR(50) NOT NULL , PRIMARY KEY (`S.no`))";

// if(mysqli_query($conn,$sql)){
//     echo "DataBase table is created  successfully";
// }else{
//     echo "ERROR CRAETING A DATABASE TABLE" .mysqli_eroor($conn);
// }

//INSERT INTO `coustomer` (`S.no`, `Name`, `email`) VALUES ('1', 'VIJAY', 'vijyakumar123@gmail.com');

//Inserting data into the table


$sql ="INSERT INTO `coustomer` ( `Name`, `email`) VALUES ('$name','$email')";
$result=mysqli_query($conn,$sql);

//checking
if($result){
   echo  "DataBase table value is created  successfully";
}else{
    echo "ERROR CRAETING A DATABASE TABLE value" .mysqli_eroor($conn);
}
?>