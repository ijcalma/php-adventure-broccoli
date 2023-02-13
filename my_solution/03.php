<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php
    $input = readLine("Enter a String:");
    $count = array();
        for($x = 0; $x <strlen($input); $x++){
            array_push($count, 1);
            for($y = $x+1; $y < strlen($input); $y++){
                if($input[$x] == $input[$y]){
                    $count[$x]++;
                    $input[$y] ='0';
                }
            }
        }
    echo ("Characters and their corresponding frequencies: \n");
    for($x = 0; $x < count($count); $x++){
        if($input[$x] != ' ' && $input[$x] != '0'){
            echo($input[$x] . "-" . $count[$x]) . "\n";
        }
    }
?>