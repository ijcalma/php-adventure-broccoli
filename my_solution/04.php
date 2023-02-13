<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
 <?php
    function sumOfInput($input){
        $sum = 0;
        for ($x = 0; $x < strlen($input); $x++){
            $sum += $input[$x];
        }
        echo $sum . " is the sum of the digits from the input.";
    }
    sumOfInput(readLine("Enter a Number:"));
?>