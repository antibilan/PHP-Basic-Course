<?php

function isBalanced(string $string): bool
{
    $array = str_split($string);
    $stack = [];

    foreach($array as $value) {
        if($value === '(') {
            $stack[] = $value;
        } elseif($value === ')') {
            if(empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }
    return count($stack) === 0;
}
