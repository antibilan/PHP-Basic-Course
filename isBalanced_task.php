<?php

function isBalanced(string $string): bool
{
    $array = str_split($string);
    $count = 0;

    foreach($array as $value) {
        if($value === '(') {
            $count++;
        } elseif($value === ')') {
            if($count === 0) {
                return false;
            }
            $count--;
        }
    }
    return $count === 0;
}
