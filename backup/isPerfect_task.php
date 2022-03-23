<?php

function isPerfect(int $n): bool
{
    $dividers = [];

    if ($n <= 1) {
        return false;
    }

    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i === 0) {
            $dividers[] = $i;
        }
    }

    return array_sum($dividers) === $n;
}
