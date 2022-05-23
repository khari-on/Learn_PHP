<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //if -- if the condition is true it excuetes


        // //syntax 
        // if(){
        //     //code to exceute;
        //     }

       $age =rand(1,150);
            echo $age;

            echo "<br>";
        if ($age <= 12){
            //if true this code will exceute
            echo "You are a child";
        }
        elseif($age > 12 && $age < 20){
           echo "You are a teen";
        }
        elseif ($age >=20 &&  $age <30){
            echo "you are a youth guy";
        }
        elseif ($age >=30 &&  $age <45){
            echo "you are a adult";
        }
        elseif ($age >=45 && $age <= 100){
            echo "you are a aged person";
        }
        else{
            // if false this code will exceute
            echo "you are GOAST";

        }

    



    ?>
</body>
</html>