<?php
//indexsd array - array have an numberes index is called as indexed array;



// $cars =array("Volvo","Bmw","Benz","audi",'marudhi',"honda","ambastor","lambo");

// echo "<br>The 1st Car is ". $cars[0] .
// "<br>The 2st Car is ". $cars[1] .
// "<br>The 3st Car is ". $cars[2] ;
//accesing an array
// echo $cars[0] . "<br>";
// echo $cars[1]  . '<br>';
// echo $cars[2]   ."<br>";

//loop throw an array;
// $arrLenght = count($cars);


// for($x=0 ; $x < $arrLenght;$x++){
//     echo $cars[$x];
//     echo '<br>';
// }

//Associative array -- array that uses named indexes is called associative array;


//craeting asscociavtive array
// $age = array ('Hari'=>24,
//                "Sabari"=>27,
//                "Vijay Kumar" => 21
// );

// var_dump($age['Hari']);


// $age['Sabari']='20';
// $age['Vijay Kumar']='13';
// $age['Hari']='35';
// var_dump($age);

// foreach($age as $x => $value)
// echo '<br>key = '.$x .",value = " . $value. "<br>";

//Multi Dimensional Arrays:
//array that  contain one or more arrays is called multidimensional array

//Two dimensional array;


// $cars =array(
//     array("volvo",22,2019),
//     array("Audi",20,2010),
//     array("Lambo",12,2030),
//     array("Farrei",2,2049),
// );

// // echo $cars[2][1];

// for($row=0;$row<count($cars);$row++){
//     echo "Row number is $row";

//     echo '<ul>';
//     for ($col=0;$col < 3 ; $col ++){
//         echo "<li>".$cars[$row][$col] . "</li>";
//     }
//     echo "</ul>";
// }

//Sorting of an array;

// $cars=array("volvo","audi","benz","camp");

// rsort($cars);

// for ($x=0;$x < count($cars);$x++){
//     echo $cars[$x];
//     echo "<br>";
// }


// $age = array ('Hari'=>4,
//                "Sabari"=>27,
//                "Vijay Kumar" => 21
// );

// krsort($age);

// foreach($age as $x => $value){
//     echo $x ."=".$value ."<br>";

// }
?>