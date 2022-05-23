<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
NAME: <input type="text" name='firstname'>
<input type="submit">
</form>



<?php




//SUPERGLOBALS

/*
$GLOBALS--

$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIES
$_SESSION
*/


//Globlas

// $x=15;

// // $GLOBALS=array("x" =>5,)

// function name(){
//     echo $GLOBALS['x'];
// };

// name();
// echo $_SERVER['PHP_SELF'];
// echo '<br>';
// echo $_SERVER['SERVER_NAME'];
// echo '<br>';
// echo $_SERVER['HTTP_HOST'];
// echo '<br>';
// echo $_SERVER['HTTP_REFERER'];
// echo '<br>';
// echo $_SERVER['HTTP_USER_AGENT'];
// echo '<br>';
// echo $_SERVER['SCRIPT_NAME'];
// echo '<br>';


//REQUEST
// if($_SERVER["REQUEST_METHOD"] == 'get'){
//     $name = $_GET["firstname"];

//     if(empty($name)){
//         echo "Name is empty";
//     }else{
//         echo "YOUR NAME IS " . $name;
//     }
// }

?>

</body>
</html>


