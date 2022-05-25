<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <!-- 
   rules for creating the form
   1)name-required , contains letter and  whitespacess are allowed..

   2)E-mail -required , mush contain a valid email @

   3)website -optional

   4)comment - optainal .mutline input
   5)gender reuired , must select one
     -->

     <?php 
     $name =$email =$gender=$comment=$website="";

     $genderErr=$nameErr=$emailErr='';

     if($_SERVER["REQUEST_METHOD"]== "POST"){
         if(empty($_POST['name'])){
             $nameErr = 'Your Name is Required';
         }else{
            $name = test( $_POST["name"]);

            if( ! preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameErr ="You entered a wrong Name it should only contain alphanumeric letters";
             };
         };

        





         if(empty($_POST['email'])){
            $emailErr = 'Your email is Required';
        }else{
           $email = test( $_POST["email"]);

           
        };

        
        if(empty($_POST['gender'])){
            $genderErr = 'Your gender is Required';
        }else{
           $gender = test( $_POST["gender"]);
        };

        // $email = test( $_POST["email"]);
        $website = test( $_POST["website"]);
        $comment = test( $_POST["comment"]);
        // $gender = test( $_POST["gender"]);
       
     };
     
     function test($data){
         $data=trim($data);
         $data=stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     };
?>

     <form action="
        <?php 
          echo htmlspecialchars($_SERVER['PHP_SELF'])
        ?>"

      method="post">



         Name : <input type="text" name="name" value="<?php echo $name; ?>">
         <span class="error" >* 
         <?php
          echo $nameErr;
         ?>
         </span>    
         
         <br>
         <br>
         E-mail : <input type="text" name="email"value="<?php echo $email; ?>">
         <span class="error">* 
         <?php
          echo $emailErr;
         ?>
         </span>   
         
         <br><br>
         Website : <input type="text" name="website"value="<?php echo $website; ?>"><br><br>

         Comment : <textarea name="comment" id="comment" cols="30" rows="10"><?php echo $comment ;?></textarea><br><br>

         Gender:
         <input type="radio" name="gender" value="Female">Female
         <input type="radio" name="gender" value="Male">Male
         <input type="radio" name="gender" value="Other">Other

         <span class="error">* 
         <?php
          echo $genderErr;
         ?>
         </span>   
         <br><br>
         <input type="submit" value="submit">
     </form>


<?php

     echo "Our Outputs value are:";
     echo "<br>";

     echo $name;
     echo "<br>";
     
     echo $email;
     echo "<br>";
     
     
     echo $website;
     echo "<br>";
     
     
     echo $comment;
     echo "<br>";
     

     
     echo $gender;
     echo "<br>";
    
     ?>
</body>
</html>