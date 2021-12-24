<?php

function fizzBuzz(int $begin, int $end): bool
{
    if ($begin > $end) {
        return false;
    }

    for ($i = $begin; $i <= $end; $i++) {
        if ($i % 3 === 0) {
            if ($i % 5 === 0) {
                print_r("FizzBuzz ");
            } else {
                print_r('Fizz ');
            }
        } elseif ($i % 5 === 0) {
            print_r('Buzz ');
        } else {
            print_r("$i ");
        }
    }
    return true;
}
