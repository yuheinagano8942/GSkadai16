<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo 'PHPと表示'.'<br>';
    }
    if ($i % 5 == 0) {
        echo 'Trainingと表示'.'<br>';
    }
    if (!($i % 3 == 0) && !($i % 5 == 0)) {
        echo $i.'<br>';
    }
    if ($i % 7 == 0) {
        echo 'HelloWorld!!と表示'.'<br>';
    }
    

    echo "\n";
}

