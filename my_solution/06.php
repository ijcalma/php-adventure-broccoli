<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
 <?php
    function triangularNumbers($input){
        $x; $y = 1; $z = 1;
        for ($x = 1; $x <= $input; $x++){
            echo(" " . $z . " ");
            $y = $y + 1;
            $z = $z + $y;
        }
    }
    triangularNumbers(readline("Enter a number:"))

?>