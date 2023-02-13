<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
    $array = explode(' ', readLine("Enter a series of numbers:"));
    $sum = 0;
    $count = count($array);
    for ($x=0;$x<count($array);$x++){
        $sum += $array[$x];
    }
    $average = $sum / $count;
    echo $average . " is the average of the series of inputs."
?>