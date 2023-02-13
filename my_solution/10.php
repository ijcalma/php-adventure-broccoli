<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
<?php
    $array = explode(' ', readLine("Enter a series of numbers:"));
    sort($array);
    $count = count($array);
    $median = (double) 0;
    if($count%2==1){
        $median=$array[($count+1)/2-1];
        echo $median;
    }
    else{
        $median=($array[$count/2-1]+$array[$count/2])/2;
        echo $median;
    }
    
?>