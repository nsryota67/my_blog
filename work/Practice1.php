<?php
    $int = $argv[1];
    if($int % 2 === 0) {
        echo '偶数です' . PHP_EOL;
    } else {
        echo '奇数です' . PHP_EOL;
    }
    
    for($number = 1; $number <= 100; $number++) {
        if($number % 3 === 0) {
            echo 'Fizz' . PHP_EOL;
        } elseif($number % 5 === 0) {
            echo 'Buzz' . PHP_EOL;
        } else {
            echo $number . PHP_EOL;
        }
    }
?>