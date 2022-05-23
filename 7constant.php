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
    // $hello = "hello";
     
    // echo ($hello) ;
    // $hello ="sorry";

    // echo($hello);


    //const
   //for creating a const variable we need a functiom -define()

//    syntax  ;

//    define(name,value,case-insensitive)

//    name - name of const;
//    value - value of const;
//   c-is- default false *its is removed *

// define("hello","yes tell me ");

// echo hello;
   
// define("cars",[
//     "volvo",
//     "audi",
//     "bmw"
// ]);

// var_dump(cars);

// echo cars[0]

define("Greeting","welcome to wwe");

function hello(){
    echo Greeting;
};

hello();

    ?>
</body>
</html>