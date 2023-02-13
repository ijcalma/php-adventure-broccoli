<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
function palindromeOrNot ($input){
    if (strrev($input)== $input) {
        echo $input . " is a Palindrome.";
    }
    else{
        echo $input . " is not a Palindrome.";
    }
}
    palindromeOrNot(readLine("Enter a String:"));
?>