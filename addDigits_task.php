<?php

function addDigits(int $n): int
{
    $nStrSplitted = str_split((string)$n);
    $result = $n;

    while ($result > 9) {
        $result = 0;
        foreach ($nStrSplitted as $value) {
            $result += (int)$value;
        }
        $nStrSplitted = str_split((string)$result);
    }
    return $result;
}
