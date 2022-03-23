<?php

function isHappy(string $string): bool
{
    $len = strlen($string);

    if ($len % 2 !== 0) {
        return false;
    }

    $halfs = str_split($string, $len / 2);
    $halfArr1 = str_split($halfs[0]);
    $halfArr2 = str_split($halfs[1]);

    return array_sum($halfArr1) === array_sum($halfArr2);
}
