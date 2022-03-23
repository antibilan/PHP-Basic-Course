<?php

namespace MyApp\Challenges;

class Task5 extends Task
{
    public function isBalanced(string $string): bool
    {
        $this->logger->info('isBalanced of Task5 has been executed.');

        if (!preg_match('#^[()]+$#', $string)) {
            $this->logger->err('isBalanced of Task5: The string consists of not only round brackets!');
            throw new \Exception('The string consists of not only round brackets!');
        }

        $array = str_split($string);
        $count = 0;

        foreach ($array as $value) {
            if ($value === '(') {
                $count++;
            } elseif ($value === ')') {
                if ($count === 0) {
                    return false;
                }
                $count--;
            }
        }
        return $count === 0;
    }
}
