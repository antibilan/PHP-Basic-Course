<?php

function fib(int $n): int
{
    $result = 0;
    switch ($n) {
        case 0:
            $result = 0;
            break;
        case 1:
            $result = 1;
            break;
        default:
            $array = [0,1];
            for($i=2; $i<=$n; $i++) {
                $array[$i] = $array[$i-1] + $array[$i-2];
                $result = $array[$i];
            }
            break;
    }
    return $result;
}
