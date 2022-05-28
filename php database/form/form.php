<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
     $name =$_POST["name"];
     $email=$_POST["email"];

     if(!empty($_POST['name']) && !empty($_POST['email'])){
       
 //connect with the server database:

 $servername="localhost";
 $username="root";
 $password="";
 $database="form";

 $con = mysqli_connect($servername,$username,$password,$database);
 
 if(!$con){
     die("Database is failed to connect");
 }

//  echo "DataBase connected successfully";

 $sql="INSERT INTO `client` (`name`, `email`, `Date`) VALUES ('$name', '$email', current_timestamp())";


 $result=mysqli_query($con,$sql);


 if($result){
     echo "Your request has been successfully sent";
 }else{
     echo "Sorry for the inconvinece, please try again latter";
 }

    }else{
        echo 'Unable to register';

    
    };

};
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>Login throw this DataBase</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])
    ?>" method="POST">

    Name:<input type="text" name="name">
    <br><br>
    Email<input type="email" name="email">
    <br><br>
<input type="Submit">
    </form>

    
</center>

<div>
    output:
    <?php
    echo "<br>";
echo $name;
echo "<br>";
echo $email;
    ?>
</div>
</body>
</html>