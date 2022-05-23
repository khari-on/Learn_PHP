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
    /*
   while- loops through a block of code as long as the certain condition is true..


   do..while --  it aleast run block of cod eonce

   for - lopps throw a block of code specified number of times 

   for each -- array looping 
    */


    //while 

    // //syntax - while(condition is true){
    //     block of code id excecute;
    // // }

    // $x = 5;

    // while ($x <= 100){
    //     echo "This is your value of  x $x" ;
    //     echo "<br>";
    //     $x += 10;
    // }


    // // do while
    // $x = 5;

    // do{
    //     echo "Value of x is $x";  
    //     echo "<br>"  ;
    //     $x++;
    // }while($x > 100)



  /*

  for (inital counter ; condition ; icrement/degreent){
      //code to excute;
  };
  */

// for ($x=0;$x <=100;$x+=5){
//     echo "This is the value of $x" . '<br>';
// }


//for each - array

/*
foreach(array as value){

}


// */

// $color =array("red","black","blue","yellow","green");

// $number =array(2,3,4,5,6,7,8,9,);

// // var_dump($color);
// // echo "<br>";

// // foreach($color as $value){
// //     echo $value . "<br>" . $value;
// // }

// foreach($number as $value){
//     $dbllet = ($value * 2) . "<br>";
//     echo $dbllet;
// }

//BREAK //CONTINUE;
//  for($x=0;$x<10 ;$x++){

//     if($x==2){
//         continue;
//     }
//     echo " this is $x <br>";
//  }

$x=0;
while($x<10){

    if($x==2){
        $x++;
        continue;
    }
    echo " this is $x <br>";
    $x++;
 }



    ?>
</body>
</html>