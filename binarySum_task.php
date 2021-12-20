<?php

function binarySum(string $num1, string $num2): string
{
    $decNum1 = bindec($num1);
    $decNum2 = bindec($num2);

    $sum = $decNum1 + $decNum2;
    return decbin($sum);
}
