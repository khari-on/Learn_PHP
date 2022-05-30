<?php

session_start();

$_SESSION["color"]="red";
$_SESSION['animal']="dog";

echo "session set";

echo"<br>";

echo $_SESSION['color'];

$_SESSION["color"]="green";
echo $_SESSION['color'];


?>


<?php
session_unset();

session_destroy();

echo "session is destoryede"
?>

