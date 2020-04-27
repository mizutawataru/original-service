<?php
    $max = 100;
    function fizzbuzz($num) {
        $result = "";
        if ($num % 15 === 0) {
            $result = "FizzBuzz";
        }
        elseif ($num % 3 === 0) {
            $result = "Fizz";
        }
        elseif ($num % 5 === 0) {
            $result = "Buzz";
        }
        else {
            $result = $num;
        }
        
        return $result;
    }
    
    for ($i = 1; $i <= $max; $i++) {
        print fizzbuzz($i) . PHP_EOL;
    }

?>