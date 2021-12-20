<?php

function isPowerOfThree(int $num3): bool
{
    while ($num3 / 3 >=1 ) {
        $num3 /= 3;
    }
    return $num3 === 1;
}
