<?php

function fib(int $n): int
{
    if ($n === 0) {
        return 0;
    }

    if ($n === 1) {
        return 1;
    }

    $result = 0;
    $array = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $array[$i] = $array[$i - 1] + $array[$i - 2];
        $result = $array[$i];
    }
    return $result;
}
