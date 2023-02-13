<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
 <?php
    $array = explode(' ', readLine("Enter a series of numbers with a space between each number:"));
    $sum = 0;
    for ($x = 0; $x < count($array); $x++){
        $sum += $array[$x];
    }
    echo $sum . " is the sum of the array of inputs.";
?>