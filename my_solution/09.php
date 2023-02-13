<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
 <?php
    $input = readLine("Enter a String:");
    for ($x=0;$x<strlen($input);$x++){
        if($input[$x] =="a" || 
           $input[$x] =="e" || 
           $input[$x] =="i" || 
           $input[$x] =="o" || 
           $input[$x] =="u" || 
           $input[$x] =="A" || 
           $input[$x] =="E" || 
           $input[$x] =="I" || 
           $input[$x] =="O" || 
           $input[$x] =="U"){
            continue;
        }
        else{
            echo $input[$x];
        }
    }
?>