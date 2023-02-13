<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
 <?php
    $array = explode(' ', readLine("Enter a series of strings separated by spaces:"));
    $longest = 0;
    for ($x = 0; $x < count($array); $x++){
        if (strlen($array[$x]) > strlen($longest)){
            $longest = $array[$x];
        }
    }
    echo $longest . " is the longest of the array of inputs.";
?>