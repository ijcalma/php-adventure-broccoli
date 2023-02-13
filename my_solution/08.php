<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
<?php
    $input = readLine("Enter a String:");
    echo str_word_count($input) . " is the number of words in the string.";
?>