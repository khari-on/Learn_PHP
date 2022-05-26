<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<!-- &copy; <?//php echo date('Y'); ?> -->
<?php

//date(format,timestamp)

//format - required speifi the time stamp 
//timestamp -optional ,speific timetamp means you can use this..




//get a date :

// d-represent the day of he month
//m-month 
//Y-year 
//l- day of the week

// echo "today is ". date('Y/m/d');
// echo "<br>";
// echo "today is ". date('Y.m.d');
// echo "<br>";
// echo "today is ". date('Y-m-d');
// echo '<br>';

// echo "today is ". date('l');
// echo "<br>";


//GET a Time

//H-24 HOUR FORMAT
//h- 12- hours 
//i -mintues 
//s-secods
//a-am pm
// date_default_timezone_set("America/New_York");
// echo "Time now is " . date('H:i:sa');


//mktime();

// mk(hour,minutes,second,month,day,year)

// $myTime =mktime(11,15,36,05,26,2023);

// echo "Your Time is ". date("l d-m-Y",$myTime);
$myTime =strtotime('+6 month');


echo date("d-m-Y l h:i:sa",$myTime);
?>