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
      //switch


      //syntax

    // $color ="grey";

    // switch ($color){
       
    //    case "red":
    //     echo "your color is red <br>";
    //     break;
    //    case "blue":
    //     echo " your color is blue <br>";
    //     break;
    //     case "yellow":
    //         echo "your color is yellow <br>";
    //         break;
    //   default:
    //     echo "i am not able to identifiy your colors";
    // }


    $age =rand(1,150);
    echo $age;

    echo "<br>";

switch($age){
case ($age <= 12):
    echo "You are a child";
    break;
case($age > 12 && $age < 20):
   echo "You are a teen";
   break;
case ($age >=20 &&  $age <30):
    echo "you are a youth guy";
    break;
case ($age >=30 &&  $age <45):
    echo "you are a adult";
    break;
case ($age >=45 && $age <= 100):
    echo "you are a aged person";
    break;

default:
    echo "you are GOAST";

}
    ?>
</body>
</html>