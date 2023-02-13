<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php
function vowelOrConsonant ($input){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    if (in_array(strtolower($input), $vowels)) {
        echo $input . " is a Vowel";
    }
    else if (is_numeric($input)){
        echo $input . " is not a letter. \n";
        echo "Please enter a letter. \n";
        vowelOrConsonant(readLine("Enter a Letter:"));
    }
    else if(strlen($input)>1){
        echo $input . " is consists of more than one letter. \n";
        echo "Please enter only one letter: \n";
        vowelOrConsonant(readLine("Enter a Letter:"));
    }
    else{
        echo $input . " is a Consonant.";
    }
}
    vowelOrConsonant(readLine("Enter a Letter:"));
?>