<?php
 require 'partials/_dbdatabase.php';

 $validErr="";
   if($_SERVER["REQUEST_METHOD"]=='POST'){
       $email = $_POST['email'];
       $password = $_POST['password'];
  
 
    $sql="select*from client where email='$email' AND password='$password'";

    $result=mysqli_query($conn,$sql);

    $num =mysqli_num_rows($result);

    if($num == 1){
      
       header("location: welcome.php");
    }else{
        $validErr= "Invalid Credentials";
    };
    
 
 
 
 };

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  <?php require 'partials/_nav.php' ?>
  <?php
  if($validErr){
    echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Eorror</strong> '. $validErr .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   };

   ?>

  <div class="container ">
      <h1 class="text-center">Login In Here</h1>
  <form action="login.php" method="post">
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control md-3" id="email"  name="email" aria-describedby="emailHelp" required>
   
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password"  name="password" required>
  </div>


  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
  </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>