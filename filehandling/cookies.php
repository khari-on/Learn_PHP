<?php
//cookies


//setcookie()--create a cookie;

//synatx: setcookie(name,value,expire,path,domain)

$cookie_name="user";
$cookie_value="gugu";

setcookie($cookie_name,$cookie_value,time()-(84600),"/");


// if(isset($_COOKIE[$cookie_name])){
//     echo "cookies is set";
//    echo "<br>";
//     echo "Welcome to our Website " .$cookie_value;
// }else{
//     echo "Not set";
// }


?>