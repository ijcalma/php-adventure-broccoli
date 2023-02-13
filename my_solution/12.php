<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php
    function randomPasswordGenerator($input){
        $password = '';
        $requirements = ['1234567890', '%^&@*#(){}', 'ABCDEFGHJKLMNPQRSTUVWXYZ', 'abcdefghjkmnpqrstuvwxyz'];

        if(strlen($password) > $input){
            foreach ($requirements as $reqs) {
                $password .= $reqs[array_rand(str_split($reqs))];
            }
        }

        while (strlen($password) < $input) {
                $random = $requirements[array_rand($requirements)];
                $password .= $random[array_rand(str_split($random))]; 
        }
        echo str_shuffle($password);
    }
    randomPasswordGenerator(readline("Enter the length of the password:"));
?>