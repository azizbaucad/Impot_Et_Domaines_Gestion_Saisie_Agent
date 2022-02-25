<?php
date_default_timezone_set("Africa/Dakar"); // set time_zone according to your location
$created = "2021-09-13 22:57:22"; // time when link is created 
$expire_date = date('Y-m-d H:i:s',strtotime('+2 minutes',strtotime($created)));
echo "Date expired is"."".$expire_date.'<br>';
//+1 day = adds 1 day
//+1 hour = adds 1 hour
//+10 minutes = adds 10 minutes
//+10 seconds = adds 10 seconds
//To sub-tract time its the same except a - is used instead of a +

$now = date("Y-m-d H:i:s"); //current time
echo  "Date Now is"."". $now.'<br>' ;

$datetime1 = new DateTime();  
    $datetime2 = new DateTime($expire_date);


if ($datetime2 >= $datetime1) { //if current time is greater then created time
    $interval = $datetime1->diff($datetime2); 
        $remaining_days = $interval->format('%a');
        $remaning_hours = $interval->format('%h');
        $remaning_minutes = $interval->format('%m');
        $remaning_seconds = $interval->format('%s');
    echo " Your link is expired".$remaning_seconds;
}
else  //still has a time
{
   echo " link is still alive";
   $interval = $datetime1->diff($datetime2); 
        $remaining_days = $interval->format('%a');
        $remaning_hours = $interval->format('%h');
        $remaning_minutes = $interval->format('%m');
        $remaning_seconds = $interval->format('%s');
    echo " Your link is expired".$remaning_seconds;
   
}
?>

 