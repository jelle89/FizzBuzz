<?php
for ($i = 1; $i < 102; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz<br>';
    } elseif ($i % 3 === 0) {
        echo 'Fizz<br>';
    } elseif ($i % 5 === 0) {
        echo 'Buzz<br>';
    } elseif ($i > 100) {
        echo 'After this point you should stop drinking!<br>';
    } else {
        echo "$i <br>";
    }
}
