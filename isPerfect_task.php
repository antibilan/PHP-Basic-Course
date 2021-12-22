<?php

function isPerfect(int $n): bool
{
    $dividers = [];

    if($n <= 1) {
        return false;
    }

    for($i = 2; $i < $n; $i++){
        if($n % $i === 0) {
            $dividers[] = $i;
        }
    }

    return array_sum($dividers) + 1 === $n; //1 is always a divider so I put it here
}
