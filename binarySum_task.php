<?php

function binarySum(string $num1, string $num2): string
{
    $decNum1 = bindec($num1);
    $decNum2 = bindec($num2);

    $sum = $decNum1 + $decNum2;
    return decbin($sum);
}

function isPowerOfThree(int $num3): bool
{
    while ($num3 / 3 >=1)
    {
        $num3 /= 3;
    }

    return $num3 === 1;
}
