<?php

/** Loops through to 500 and outputs the expected string **/
$file   = fopen('fizzbuzz.log',"a+") or exit ("Unable to open file!");
$string = '';

for ($i = 1; $i <= 500; $i++) {
    switch ($i) {
        case isPrime($i) === true:
            $string = $i." FIZZBUZZ++";
            echo $string."\n";
            fwrite($file,$string."\n");
            break;
        case $i % 15 == 0:
            $string = $i." FIZZBUZZ";
            echo $string."\n";
            fwrite($file,$string."\n");
            break;
        case $i % 5 == 0:
            $string = $i." BUZZ";
            echo $string."\n";
            fwrite($file,$string."\n");
            break;
        case $i % 3 == 0:
            $string = $i." FIZZ";
            echo $string."\n";
            fwrite($file,$string."\n");
            break;
        default:
            echo $i."\n";
            fwrite($file,$i."\n");
    }
}

fclose($file);

/**
 * Check if given variable is prime or not
 *
 * @param $n
 * @return bool
 */
function isPrime($n)
{
    if ($n == 1) {
        return false;
    }

    for ($x=2; $x<$n; $x++) {
        if ($n %$x ==0) {
            return false;
        }
    }

    return true;
}